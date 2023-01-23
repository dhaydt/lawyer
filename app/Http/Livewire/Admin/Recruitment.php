<?php

namespace App\Http\Livewire\Admin;

use App\Models\Jobs;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class recruitment extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setJob', 'refreshJob' => '$refresh'];

    protected $job;

    public $search;
    public $title;
    public $total_show = 10;

    public $position;
    public $description;
    public $qualification;
    public $job_id;
    public $expire;
    public $status = 1;
    public $type = 'save';

    protected $rulesUpdate = [
        'position' => 'required',
        'description' => 'required',
        'qualification' => 'required',
        'expire' => 'required',
    ];

    protected $messages = [
        'position.required' => 'Job Title / Position is required',
        'description.required' => 'Description is required',
        'qualification.required' => 'Qualification is required',
        'expire.required' => 'Expire date is required',
    ];

    public function render()
    {
        $this->job = Jobs::where(function ($q) {
            $q->where('position', 'LIKE', '%' . $this->search . '%')
                ->orWhere('description', 'LIKE', '%' . $this->search . '%')
                ->orWhere('qualification', 'LIKE', '%' . $this->search . '%');
        })->paginate($this->total_show);

        $data['job'] = $this->job;

        return view('livewire.admin.recruitment', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setJob($item)
    {
        $this->job_id = $item['id'];
        $this->position = $item['position'];
        $this->qualification = $item['qualification'];
        $this->description = $item['description'];
        $this->status = $item['status'];
        $this->expire = Carbon::parse($item['expire'])->format("Y-m-d");
    }

    public function resetInput()
    {
        $this->position = null;
        $this->description = null;
        $this->status = 1;
        $this->qualification = null;
        $this->expire = null;
    }

    public function save()
    {
        $this->validate([
            'position' => 'required',
            'description' => 'required',
            'qualification' => 'required',
            'expire' => 'required',
        ], [
            'position.required' => 'Job Title / Position is required',
            'description.required' => 'Description is required',
            'qualification.required' => 'Qualification is required',
            'expire.required' => 'Expire date is required',
        ]);


        if ($this->type == 'update') {
            $save = Jobs::find($this->job_id);
        }else{
            $save = new Jobs();
        }



        $save->position = $this->position;
        $save->description = $this->description;
        $save->qualification = $this->qualification;
        $save->expire = $this->expire;

        $save->save();

        $this->resetInput();
        if ($this->type == 'update') {
            $this->emit('finishJob', 1, 'Successfully update jobs!');
        } else {
            $this->emit('finishJob', 1, 'Successfully added new jobs!');
        }
        $this->emit('refresh');
    }

    public function delete()
    {
        $cabang = Jobs::find($this->job_id);

        if (!$cabang) {
            return session()->flash('fail', 'Jobs not found!');
        }
        $name = $cabang->position;

        $cabang->delete();
        $this->emit('finishJob', 1, 'Jobs deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Jobs ' . $name . '\'s deleted successfully');
    }
}
