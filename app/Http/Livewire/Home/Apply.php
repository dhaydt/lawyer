<?php

namespace App\Http\Livewire\Home;

use App\Models\Applied;
use App\Models\Jobs;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Yoeunes\Toastr\Facades\Toastr as FacadesToastr;
use Yoeunes\Toastr\Toastr;

class Apply extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $listeners = ['save', 'update', 'delete', 'resetInput', 'setContent', 'refreshContent' => '$refresh'];

    public $paginationTheme = 'bootstrap';
    protected $carrier;

    public $search;
    public $title;
    public $job_id;

    public $name;
    public $phone;
    public $email;
    public $agama;
    public $gender;
    public $marital;
    public $ktp;
    public $cv;
    public $address;
    public $edu;

    public $agama_list = [
        'Islam', 'Protestan', 'Katolik', 'Hindu', 'Buddha', 'Khonghucu'
    ];
    public $edu_list = [
        'SMA/MA','S.1/D.IV', 'S.II', 'S.III'
    ];

    public $total_show = 6;

    protected $rulesUpdate = [
        'name' => 'required',
        'phone' => 'required',
        'gender' => 'required',
        'marital' => 'required',
        'email' => 'required',
        'agama' => 'required',
        'ktp' => 'required',
        'cv' => 'required',
        'address' => 'required',
        'edu' => 'required',
    ];

    protected $messages = [
        'name.required' => 'Your full name is required',
        'phone.required' => 'Your phone / whatsapp number is required',
        'gender.required' => 'Please select your gender!',
        'email.required' => 'Your email is required!',
        'agama.required' => 'Please select your religion!',
        'marital.required' => 'Please select your marital status',
        'ktp.required' => 'Please upload your KTP',
        'cv.required' => 'Please upload your curriculum vitae',
        'address.required' => 'Your address is required',
        'edu.required' => 'Please select your last education!',
    ];


    public function render()
    {
        $this->carrier = Jobs::find($this->job_id);
        $data['carrier'] = $this->carrier;

        return view('livewire.home.apply', $data);
    }

    public function mount($data){
        $this->job_id= $data['id'];
    }
    public function resetInput(){
        $this->name = null;
        $this->phone= null;
        $this->gender= null;
        $this->email= null;
        $this->agama= null;
        $this->marital = null;
        $this->edu = null;
        $this->address= null;
        $this->ktp= null;
        $this->cv= null;
    }
    public function save(){
        $this->validate($this->rulesUpdate, $this->messages);

        $dir = 'apply';
        $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
        $cvName = Carbon::now()->toDateString().'-'.uniqid().'.'.'pdf';
        $this->ktp->storeAs('public/'.$dir, $imgName);
        $this->cv->storeAs('public/'.$dir, $cvName);

        $apply = Applied::create([
            'name' => $this->name,
            'job_id' => $this->job_id,
            'phone' => $this->phone,
            'email' => $this->email,
            'agama' => $this->agama,
            'gender' => $this->gender,
            'marital_status' => $this->marital,
            'education' => $this->edu,
            'address' => $this->address,
            'ktp' => 'storage/apply/'.$imgName,
            'cv' => 'storage/apply/'.$cvName,
        ]);

        $this->resetInput();

        FacadesToastr::success('your apply saved successfully');
    }

}
