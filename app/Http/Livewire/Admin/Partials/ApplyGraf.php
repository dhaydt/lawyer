<?php

namespace App\Http\Livewire\Admin\Partials;

use App\Models\Applied;
use App\Models\Jobs;
use Carbon\Carbon;
use Livewire\Component;

class ApplyGraf extends Component
{
    protected $jobs;
    public $job = [];
    public $applied = [];

    public $total_job;
    public $total_apply;
    public function render()
    {
        return view('livewire.admin.partials.apply-graf');
    }

    public function mount(){
        $now = Carbon::now()->format('Y');

        $total_job = count(Jobs::whereYear('created_at',$now)->get());
        $total_applied = count(Applied::whereYear('created_at',$now)->get());

        $this->total_job = $total_job;
        $this->total_applied = $total_applied;

        function persen($val, $tot){
            $hasil = ($val / $tot) * (100 / 100);
            return round($hasil*100);
        }

        $j1 = count(Jobs::whereMonth('created_at', 1)->get());
        $j2 = count(Jobs::whereMonth('created_at', 2)->get());
        $j3 = count(Jobs::whereMonth('created_at', 3)->get());
        $j4 = count(Jobs::whereMonth('created_at', 4)->get());
        $j5 = count(Jobs::whereMonth('created_at', 5)->get());
        $j6 = count(Jobs::whereMonth('created_at', 6)->get());
        $j7 = count(Jobs::whereMonth('created_at', 7)->get());
        $j8 = count(Jobs::whereMonth('created_at', 8)->get());
        $j9 = count(Jobs::whereMonth('created_at', 9)->get());
        $j10 = count(Jobs::whereMonth('created_at', 10)->get());
        $j11 = count(Jobs::whereMonth('created_at', 11)->get());
        $j12 = count(Jobs::whereMonth('created_at', 12)->get());

        array_push($this->job, persen($j1, $total_job));
        array_push($this->job, persen($j2, $total_job));
        array_push($this->job, persen($j3, $total_job));
        array_push($this->job, persen($j4, $total_job));
        array_push($this->job, persen($j5, $total_job));
        array_push($this->job, persen($j6, $total_job));
        array_push($this->job, persen($j7, $total_job));
        array_push($this->job, persen($j8, $total_job));
        array_push($this->job, persen($j9, $total_job));
        array_push($this->job, persen($j10, $total_job));
        array_push($this->job, persen($j11, $total_job));
        array_push($this->job, persen($j12, $total_job));

        $a1 = count(Applied::whereMonth('created_at', 1)->get());
        $a2 = count(Applied::whereMonth('created_at', 2)->get());
        $a3 = count(Applied::whereMonth('created_at', 3)->get());
        $a4 = count(Applied::whereMonth('created_at', 4)->get());
        $a5 = count(Applied::whereMonth('created_at', 5)->get());
        $a6 = count(Applied::whereMonth('created_at', 6)->get());
        $a7 = count(Applied::whereMonth('created_at', 7)->get());
        $a8 = count(Applied::whereMonth('created_at', 8)->get());
        $a9 = count(Applied::whereMonth('created_at', 9)->get());
        $a10 = count(Applied::whereMonth('created_at', 10)->get());
        $a11 = count(Applied::whereMonth('created_at', 11)->get());
        $a12 = count(Applied::whereMonth('created_at', 12)->get());

        array_push($this->applied, persen($a1, $total_applied));
        array_push($this->applied, persen($a2, $total_applied));
        array_push($this->applied, persen($a3, $total_applied));
        array_push($this->applied, persen($a4, $total_applied));
        array_push($this->applied, persen($a5, $total_applied));
        array_push($this->applied, persen($a6, $total_applied));
        array_push($this->applied, persen($a7, $total_applied));
        array_push($this->applied, persen($a8, $total_applied));
        array_push($this->applied, persen($a9, $total_applied));
        array_push($this->applied, persen($a10, $total_applied));
        array_push($this->applied, persen($a11, $total_applied));
        array_push($this->applied, persen($a12, $total_applied));

    }
}
