<?php

namespace App\Http\Livewire\Admin;

use App\CPU\ImageManager;
use App\Models\WebConfig;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class AboutUs extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'updateAbout', 'delete', 'setAbout', 'refreshAbout' => '$refresh'];
    protected $abouts;
    public $title;

    public $search;
    public $total_show = 10;

    public $about;
    public $expertise;
    public $img;
    public $photo;

    protected $rules= [
        'about' => 'required'
    ];

    protected $messages = [
        'about.required' => 'Please tell about your company'
    ];

    public function render()
    {

        $data['about'] = $this->about;

        return view('livewire.admin.about-us', $data);
    }

    public function mount($title)
    {
        $this->title = $title;
        $this->abouts = WebConfig::where(function ($q) {
            $q->where('type', 'about_us');
        })->first();
        $this->expertise = WebConfig::where(function ($q) {
            $q->where('type', 'expertise');
        })->first()->value;
        $this->photo = WebConfig::where(function ($q) {
            $q->where('type', 'about_image');
        })->first()->value;
        $this->about = $this->abouts->value;
    }

    public function updateAbout()
    {
        $this->validate($this->rules, $this->messages);
        $about = WebConfig::where('type', 'about_us')->first();

        $about->value = $this->about;

        $about->save();

        $expertise = WebConfig::where('type', 'expertise')->first();

        $expertise->value = $this->expertise;

        $expertise->save();

        $image = WebConfig::where('type', 'about_image')->first();


        if($this->img){
            $dir = 'company';

            $imgName = Carbon::now()->toDateString().'-'.uniqid().'.'.'png';
            ImageManager::deleteImg($image->value);
            $this->img->storeAs('public/'.$dir, $imgName);
            $image->value= 'storage/company/'.$imgName;
            $image->save();
        }

        $this->emit('finishAbout', 1, 'Successfully update data!');
        $this->emit('refresh');

        return session()->flash('success', 'about us updated successfully!');
    }
}
