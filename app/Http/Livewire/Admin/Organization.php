<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\WebConfig;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Organization extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'updateOrganization', 'refreshOrganization' => '$refresh'];
    protected $organization;
    public $title;

    public $search;
    public $total_show = 10;

    public $who_we_are;
    public $case_count;
    public $exp_count;
    public $exp_content;
    public $img;
    public $imgSecond;

    public $photo;
    public $photoSecond;

    protected $rules= [
        'who_we_are' => 'required'
    ];

    protected $messages = [
        'who_we_are.required' => 'Please tell who your company are'
    ];

    public function render()
    {

        $data['organization'] = $this->organization;

        return view('livewire.admin.organization', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
        $this->who_we_are = WebConfig::where(function ($q) {
            $q->where('type', 'who_we_are');
        })->first()->value;
        $this->case_count = WebConfig::where(function ($q) {
            $q->where('type', 'case_count');
        })->first()->value;
        $this->exp_count= WebConfig::where(function ($q) {
            $q->where('type', 'exp_count');
        })->first()->value;
        $this->photo = WebConfig::where(function ($q) {
            $q->where('type', 'organization_primary_image');
        })->first()->value;
        $this->photoSecond = WebConfig::where(function ($q) {
            $q->where('type', 'organization_secondary_image');
        })->first()->value;
        $this->exp_content = WebConfig::where(function ($q) {
            $q->where('type', 'exp_content');
        })->first()->value;
    }

    public function updateOrganization()
    {
        $this->validate($this->rules, $this->messages);
        $who_we_are = WebConfig::where('type', 'who_we_are')->first();

        $who_we_are->value = $this->who_we_are;

        $who_we_are->save();

        $exp_count = WebConfig::where('type', 'exp_count')->first();

        $exp_count->value = $this->exp_count;

        $exp_count->save();

        $case_count = WebConfig::where('type', 'case_count')->first();

        $case_count->value = $this->case_count;

        $case_count->save();

        $exp_content = WebConfig::where('type', 'exp_content')->first();

        $exp_content->value = $this->exp_content;

        $exp_content->save();

        $image = WebConfig::where('type', 'organization_primary_image')->first();


        $dir = 'company';
        if($this->img){

            $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
            ImageManager::deleteImg($image->value);
            $this->img->storeAs('public/'.$dir, $imgName);
            $image->value= 'storage/company/'.$imgName;
            $image->save();
        }

        $image2 = WebConfig::where('type', 'organization_secondary_image')->first();


        if($this->imgSecond){
            $imgNamed = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
            ImageManager::deleteImg($image2->value);
            $this->imgSecond->storeAs('public/'.$dir, $imgNamed);
            $image2->value= 'storage/company/'.$imgNamed;
            $image2->save();
        }

        $this->emit('finishOrganization', 1, 'Successfully update data!');
        $this->emit('refreshOrganization');

        return session()->flash('success', 'Data updated successfully!');
    }
}
