<?php

namespace App\Http\Livewire\Admin;

use App\Models\Hashtag;
use Livewire\Component;
use Livewire\WithPagination;

class Hastags extends Component
{
    use WithPagination;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'setHashtag', 'refreshHashtag' => '$refresh'];
    public $title;
    protected $hashtag;

    public $search;
    public $total_show = 10;

    public $name;
    public $hashtag_id;

    protected $rulesUpdate = [
        'name' => 'required',
    ];

    protected $messages = [
        'name.required' => 'hashtag name is required',
    ];

    public function render()
    {
        $this->hashtag = Hashtag::where(function ($q) {
            $q->where('name', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->total_show);

        $data['hashtag'] = $this->hashtag;

        return view('livewire.admin.hastags', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setHashtag($item)
    {
        $this->hashtag_id = $item['id'];
        $this->name = $item['name'];
    }

    public function resetInput()
    {
        $this->hashtag_id = null;
        $this->name = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
        ], [
            'name.required' => 'hashtag name is required',
        ]);

        $save = Hashtag::updateOrCreate([
            'name' => $this->name,
        ]);

        $this->resetInput();
        $this->emit('finishHashtag', 1, 'Successfully added new hashtag!');
        $this->emit('refresh');
    }

    public function update()
    {
        $this->validate($this->rulesUpdate, $this->messages);
        $cabang = Hashtag::find($this->hashtag_id);
        if (!$cabang) {
            return session()->flash('fail', 'hashtag not found');
        }

        $cabang->name = $this->name;

        $cabang->save();

        $this->resetInput();
        $this->emit('finishHashtag', 1, 'Successfully update hashtag!');
        $this->emit('refresh');

        return session()->flash('success', 'hashtag updated successfully!');
    }

    public function delete()
    {
        $cabang = Hashtag::find($this->hashtag_id);

        if (!$cabang) {
            return session()->flash('fail', 'hashtag not found!');
        }
        $name = $cabang->name;

        $cabang->delete();
        $this->emit('finishHashtag', 1, 'hashtag deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'hashtag '.$name.'\'s deleted successfully');
    }
}
