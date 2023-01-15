<?php

namespace App\Http\Livewire\Home;

use App\Models\Content as ModelsContent;
use Livewire\Component;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    protected $content;
    public $search;
    public $title;
    public $total_show = 6;

    public function render()
    {
        $this->content = ModelsContent::where('is_active', 1)->where(function ($q) {
            $q->where('category', 'post')
                ->orWhere('category', 'journal');
        })->orderBy('created_at', 'desc')->paginate($this->total_show);
        $data['content'] = $this->content;

        return view('livewire.home.content', $data);
    }
}
