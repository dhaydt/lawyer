<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\Applied as ModelsApplied;
use App\Models\Jobs;
use Livewire\Component;
use Livewire\WithPagination;

class Applied extends Component
{
    use WithPagination;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setApplied', 'refreshApplied' => '$refresh'];

    protected $applied;

    public $search;
    public $title;
    public $total_show = 10;

    public $applied_id;
    public $job_id;
    public $name;
    public $phone;
    public $position;
    public $gender;
    public $marital;
    public $edu;
    public $address;
    public $ktp;
    public $cv;
    public $status;
    public $email;
    public $agama;

    public $type = 'save';

    protected $rulesUpdate = [
        'title_applied' => 'required',
        'content_type' => 'required',
    ];

    protected $messages = [
        'title_applied.required' => 'applied title is required',
        'content_type.required' => 'Please select applied type',
    ];

    public function render()
    {
        $this->applied = ModelsApplied::where(function ($q) {
            $q->where('name', 'LIKE', '%' . $this->search . '%');
        })->paginate($this->total_show);

        $data['applied'] = $this->applied;

        return view('livewire.admin.applied', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
    }

    public function setApplied($item)
    {
        $job = Jobs::find($item['job_id']);
        $this->name = $item['name'];
        $this->position = $job['position'];
        $this->phone = $item['phone'];
        $this->email = $item['email'];
        $this->gender = $item['gender'];
        $this->marital = $item['marital_status'];
        $this->edu = $item['education'];
        $this->agama = $item['agama'];
        $this->address = $item['address'];
        $this->ktp = $item['ktp'];
        $this->cv = $item['cv'];
    }

    public function delete()
    {
        $cabang = Modelsapplied::find($this->applied_id);

        if (!$cabang) {
            return session()->flash('fail', 'data not found!');
        }
        $name = $cabang->title;
        ImageManager::deleteImg($cabang->ktp);
        ImageManager::deleteImg($cabang->cv);

        $cabang->delete();
        $this->emit('finishApplied', 1, 'Data deleted successfully!');
        $this->emit('refresh');

        return session()->flash('success', 'Data ' . $name . '\'s deleted successfully');
    }
}
