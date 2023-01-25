<?php

namespace App\Http\Livewire\Home;

use App\Models\Jobs;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;

class Carrier extends Component
{
    use WithPagination;
    public $paginationTheme = 'bootstrap';
    protected $carrier;
    public $search;
    public $title;
    public $total_show = 6;

    public function render()
    {
        $now = now()->format('Y-m-d');
        $this->carrier = Jobs::where('status', 1)->where('expire', '>=', $now)->orderBy('created_at', 'desc')->paginate($this->total_show);
        $data['carrier'] = $this->carrier;

        return view('livewire.home.carrier', $data);
    }
}
