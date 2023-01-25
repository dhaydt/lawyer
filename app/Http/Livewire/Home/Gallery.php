<?php

namespace App\Http\Livewire\Home;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;
use Livewire\WithPagination;

class Gallery extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    protected $image;
    protected $video;
    public $search;
    public $title;
    public $total_show = 6;

    public function render()
    {
        $this->image = ModelsGallery::where('status', 1)->where(function ($q) {
            $q->where('type', 'image');
        })->orderBy('created_at', 'desc')->paginate($this->total_show);

        $this->video = ModelsGallery::where('status', 1)->where(function ($q) {
            $q->where('type', 'youtube');
        })->orderBy('created_at', 'desc')->paginate($this->total_show);
        $data['image'] = $this->image;
        $data['video'] = $this->video;

        return view('livewire.home.gallery', $data);
    }
}
