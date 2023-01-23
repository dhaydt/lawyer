<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\Gallery as ModelsGallery;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setGallery', 'refreshGallery' => '$refresh'];

    protected $gallery;

    public $search;
    public $title;
    public $total_show = 10;

    public $title_gallery;
    public $description;
    public $image;
    public $youtube;
    public $gallery_id;
    public $content_type = 'image';
    public $status = 1;

    public $photo;
    public $type = 'save';

    protected $rulesUpdate = [
        'title_gallery' => 'required',
        'content_type' => 'required',
    ];

    protected $messages = [
        'title_gallery.required' => 'gallery title is required',
        'content_type.required' => 'Please select gallery type',
    ];

    public function render()
    {
        $this->gallery = ModelsGallery::where(function ($q) {
            $q->where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('type', 'LIKE', '%' . $this->search . '%');
        })->paginate($this->total_show);

        $data['gallery'] = $this->gallery;

        return view('livewire.admin.gallery', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setGallery($item)
    {
        $this->gallery_id = $item['id'];
        $this->title_gallery = $item['title'];
        $this->photo = $item['image'];
        $this->youtube= $item['youtube'];
        $this->content_type = $item['type'];
        $this->status = $item['status'];
    }

    public function resetInput()
    {
        $this->title_gallery = null;
        $this->description = null;
        $this->status = 1;
        $this->image = null;
        $this->youtube= null;
        $this->content_type= 'image';
    }

    public function save()
    {
        $this->validate([
            'title' => 'required',
            'content_type' => 'required',
        ], [
            'name.required' => 'name is required',
            'content_type.required' => 'Please select gallery type',
        ]);

        $dir = 'gallery';

        $imgName = Carbon::now()->toDateString() . '-' . uniqid() . '.' . 'png';

        if ($this->type == 'update') {
            $save = ModelsGallery::find($this->gallery_id);
            if (!$save) {
                return session()->flash('fail', 'Data not found');
            }

            if($this->content_type == 'youtube'){
                $save->youtube = $this->youtube;
                ImageManager::deleteImg($save->image);
                $save->image = null;
            }

            if ($this->content_type == 'image') {
                $imgName = Carbon::now()->toDateString() . '-' . uniqid() . '.' . 'png';
                ImageManager::deleteImg($save->image);
                $this->image->storeAs('public/' . $dir, $imgName);
                $save->youtube = null;
                $save->image = 'storage/gallery/' . $imgName;
            }
        } else {
            $save = new ModelsGallery();
            if ($this->image != null) {
                $this->image->storeAs('public/' . $dir, $imgName);
                $save->image = 'storage/gallery/' . $imgName;
            }
        }

        $save->title = $this->title_gallery;
        $save->type = $this->content_type;
        $save->status= $this->status;
        $save->description = $this->description;

        $save->save();

        $this->resetInput();
        if ($this->type == 'update') {
            $this->emit('finishGallery', 1, 'Successfully update announcement!');
        } else {
            $this->emit('finishGallery', 1, 'Successfully added new announcement!');
        }
        $this->emit('refresh');
    }

    public function delete()
    {
        $cabang = ModelsGallery::find($this->gallery_id);

        if (!$cabang) {
            return session()->flash('fail', 'data not found!');
        }
        $name = $cabang->title;
        ImageManager::deleteImg($cabang->image);

        $cabang->delete();
        $this->emit('finishGallery', 1, 'Data deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Data ' . $name . '\'s deleted successfully');
    }
}
