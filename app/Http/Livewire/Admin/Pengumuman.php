<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\Pengumuman as ModelsPengumuman;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Pengumuman extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setNotif', 'refreshNotif' => '$refresh'];

    protected $notif;

    public $search;
    public $title;
    public $total_show = 10;

    public $title_notif;
    public $description;
    public $image;
    public $photo;
    public $notif_id;
    public $status = 1;
    public $type = 'save';

    protected $rulesUpdate = [
        'title_notif' => 'required',
        'description' => 'required',
    ];

    protected $messages = [
        'title_notif.required' => 'Notif title is required',
        'description.required' => 'Description is required',
    ];

    public function render()
    {
        $this->notif = ModelsPengumuman::where(function ($q) {
            $q->where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('description', 'LIKE', '%' . $this->search . '%');
        })->paginate($this->total_show);

        $data['notif'] = $this->notif;

        return view('livewire.admin.pengumuman', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setNotif($item)
    {
        $this->notif_id = $item['id'];
        $this->title_notif = $item['title'];
        $this->photo = $item['image'];
        $this->description = $item['description'];
        $this->status = $item['status'];
    }

    public function resetInput()
    {
        $this->title_notif = null;
        $this->description = null;
        $this->status = 1;
        $this->image = null;
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
        ], [
            'name.required' => 'name is required',
            'position.required' => 'position is required',
        ]);

        $dir = 'notif';

        $imgName = Carbon::now()->toDateString() . '-' . uniqid() . '.' . 'png';

        if ($this->type == 'update') {
            $save = ModelsPengumuman::find($this->notif_id);
            if (!$save) {
                return session()->flash('fail', 'Announcement is not found');
            }

            // if ($this->image != null) {
            //     $imgName = Carbon::now()->toDateString() . '-' . uniqid() . '.' . 'png';
            //     ImageManager::deleteImg($save->image);
            //     $this->image->storeAs('public/' . $dir, $imgName);
            // }
        } else {
            // $save = new ModelsPengumuman();
            // if ($this->image != null) {
            //     $this->image->storeAs('public/' . $dir, $imgName);
            //     $save->image = 'storage/notif/' . $imgName;
            // }
        }

        $save->title = $this->title_notif;
        $save->description = $this->description;

        $save->save();

        $this->resetInput();
        if ($this->type == 'update') {
            $this->emit('finishNotif', 1, 'Successfully update announcement!');
        } else {
            $this->emit('finishNotif', 1, 'Successfully added new announcement!');
        }
        $this->emit('refresh');
    }

    public function delete()
    {
        $cabang = ModelsPengumuman::find($this->notif_id);

        if (!$cabang) {
            return session()->flash('fail', 'Announcement not found!');
        }
        $name = $cabang->title;
        ImageManager::deleteImg($cabang->image);

        $cabang->delete();
        $this->emit('finishNotif', 1, 'Announcement deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Announcement ' . $name . '\'s deleted successfully');
    }
}
