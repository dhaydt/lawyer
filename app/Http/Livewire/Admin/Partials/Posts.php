<?php

namespace App\Http\Livewire\Admin\Partials;

use App\Models\Content;
use Livewire\Component;

class Posts extends Component
{
    protected $content;
    public function render()
    {
        $this->content = Content::where('is_active', 1)->orderBy('updated_at', 'desc')->get()->take(6);
        $data['content'] = $this->content;
        return view('livewire.admin.partials.posts', $data);
    }
}
