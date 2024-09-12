<?php

namespace App\Http\Livewire\Home;

use App\Models\LawName;
use Livewire\Component;
use Livewire\WithPagination;

class Undang extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    protected $content;
    public $search;
    public $title;
    public $total_show = 6;

    public function render()
    {
        $this->content = LawName::where('status', 1)->orderBy('created_at', 'desc')->paginate($this->total_show);
        $data['content'] = $this->content;
        return view('livewire.home.undang', $data);
    }
}
