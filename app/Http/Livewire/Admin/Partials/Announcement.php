<?php

namespace App\Http\Livewire\Admin\Partials;

use App\Models\Pengumuman;
use Livewire\Component;

class Announcement extends Component
{
    protected $peng;
    public function render()
    {
        $this->peng = Pengumuman::where('status', 1)->orderBy('updated_at', 'desc')->get()->take(6);
        $data['peng'] = $this->peng;
        return view('livewire.admin.partials.announcement', $data);
    }
}
