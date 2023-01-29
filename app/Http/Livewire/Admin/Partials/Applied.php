<?php

namespace App\Http\Livewire\Admin\Partials;

use Livewire\Component;

class Applied extends Component
{
    protected $applied;
    public function render()
    {
        $this->applied = \App\Models\Applied::orderBy('created_at', 'desc')->get()->take(6);
        $data['applied'] = $this->applied;
        return view('livewire.admin.partials.applied', $data);
    }
}
