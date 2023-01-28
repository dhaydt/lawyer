<?php

namespace App\Http\Livewire\Admin\Partials;

use App\Models\Services as ModelsServices;
use Livewire\Component;

class Services extends Component
{
    protected $services;

    public function render()
    {
        $this->services = ModelsServices::orderBy('updated_at', 'desc')->get()->take(6);
        $data['services'] = $this->services;

        return view('livewire.admin.partials.services', $data);
    }
}
