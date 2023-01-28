<?php

namespace App\Http\Livewire\Admin\Partials;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    protected $gallery;

    public function render()
    {
        $this->gallery = ModelsGallery::where('type', 'image')->orderBy('updated_at', 'desc')->get()->take(6);
        $data['gallery'] = $this->gallery;
        return view('livewire.admin.partials.gallery', $data);
    }
}
