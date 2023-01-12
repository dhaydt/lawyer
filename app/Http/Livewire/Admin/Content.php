<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Content extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    public $listeners = ['save', 'update', 'delete', 'setContent', 'refreshContent' => '$refresh'];

    protected $content;

    public $search;
    public $total_show = 10;

    public $title;
    public $category_id;
    public $type;
    public $isi_content;
    public $status;

    public function render()
    {
        return view('livewire.admin.content');
    }
}
