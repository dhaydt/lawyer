<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\Team as ModelsTeam;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Team extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setTeam', 'refreshTeam' => '$refresh'];

    protected $team;

    public $search;
    public $title;
    public $total_show = 10;

    public $name;
    public $position;
    public $image;
    public $description;
    public $team_id;
    public $type = 'save';

    public $photo;

    public function render()
    {
        $this->team = ModelsTeam::where(function ($q) {
            $q->where('name', 'LIKE', '%'.$this->search.'%')
                ->orWhere('position', 'LIKE', '%'.$this->search.'%');
        })->paginate($this->total_show);

        $data['team'] = $this->team;

        return view('livewire.admin.team', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setTeam($item)
    {
        $this->team_id = $item['id'];
        $this->name = $item['name'];
        $this->photo = $item['image'];
        $this->position = $item['position'];
        $this->description = $item['description'];
    }

    public function resetInput()
    {
        $this->name = null;
        $this->position = null;
        $this->image = null;
        $this->description = null;
    }

    public function save()
    {
        $this->validate([
            'name' => 'required',
            'position' => 'required',
        ], [
            'name.required' => 'name is required',
            'position.required' => 'position is required',
        ]);

        $dir = 'team';

        $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';

        if ($this->type == 'update') {
            $save = ModelsTeam::find($this->team_id);
            if (!$save) {
                return session()->flash('fail', 'Team is not found');
            }

            if ($this->image != null) {
                $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
                ImageManager::deleteImg($save->image);
                $this->image->storeAs('public/'.$dir, $imgName);
                $save->image = 'storage/team/'.$imgName;
            }
        } else {
            $save = new ModelsTeam();
            if ($this->image != null) {
                $this->image->storeAs('public/'.$dir, $imgName);
                $save->image = 'storage/team/'.$imgName;
            }
        }

        $save->name = $this->name;
        $save->position = $this->position;
        $save->is_active = 1;
        $save->description = $this->description;

        $save->save();

        $this->resetInput();
        if ($this->type == 'update') {
            $this->emit('finishTeam', 1, 'Successfully update team!');
        } else {
            $this->emit('finishTeam', 1, 'Successfully added new team!');
        }
        $this->emit('refresh');
    }

    public function delete()
    {
        $cabang = team::find($this->team_id);

        if (!$cabang) {
            return session()->flash('fail', 'team not found!');
        }
        $name = $cabang->title;
        ImageManager::deleteImg($cabang->image);

        $cabang->delete();
        $this->emit('finishTeam', 1, 'team Company deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Team '.$name.'\'s deleted successfully');
    }
}
