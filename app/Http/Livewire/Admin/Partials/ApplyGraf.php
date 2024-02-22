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
    public $total_applied;
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

        

        $j1 = count(Jobs::whereMonth('created_at', 1)->whereYear('created_at', $now)->get());
        $j2 = count(Jobs::whereMonth('created_at', 2)->whereYear('created_at', $now)->get());
        $j3 = count(Jobs::whereMonth('created_at', 3)->whereYear('created_at', $now)->get());
        $j4 = count(Jobs::whereMonth('created_at', 4)->whereYear('created_at', $now)->get());
        $j5 = count(Jobs::whereMonth('created_at', 5)->whereYear('created_at', $now)->get());
        $j6 = count(Jobs::whereMonth('created_at', 6)->whereYear('created_at', $now)->get());
        $j7 = count(Jobs::whereMonth('created_at', 7)->whereYear('created_at', $now)->get());
        $j8 = count(Jobs::whereMonth('created_at', 8)->whereYear('created_at', $now)->get());
        $j9 = count(Jobs::whereMonth('created_at', 9)->whereYear('created_at', $now)->get());
        $j10 = count(Jobs::whereMonth('created_at', 10)->whereYear('created_at', $now)->get());
        $j11 = count(Jobs::whereMonth('created_at', 11)->whereYear('created_at', $now)->get());
        $j12 = count(Jobs::whereMonth('created_at', 12)->whereYear('created_at', $now)->get());

        array_push($this->job, $this->persen($j1, $total_job));
        array_push($this->job, $this->persen($j2, $total_job));
        array_push($this->job, $this->persen($j3, $total_job));
        array_push($this->job, $this->persen($j4, $total_job));
        array_push($this->job, $this->persen($j5, $total_job));
        array_push($this->job, $this->persen($j6, $total_job));
        array_push($this->job, $this->persen($j7, $total_job));
        array_push($this->job, $this->persen($j8, $total_job));
        array_push($this->job, $this->persen($j9, $total_job));
        array_push($this->job, $this->persen($j10, $total_job));
        array_push($this->job, $this->persen($j11, $total_job));
        array_push($this->job, $this->persen($j12, $total_job));

        $a1 = count(Applied::whereMonth('created_at', 1)->whereYear('created_at', $now)->get());
        $a2 = count(Applied::whereMonth('created_at', 2)->whereYear('created_at', $now)->get());
        $a3 = count(Applied::whereMonth('created_at', 3)->whereYear('created_at', $now)->get());
        $a4 = count(Applied::whereMonth('created_at', 4)->whereYear('created_at', $now)->get());
        $a5 = count(Applied::whereMonth('created_at', 5)->whereYear('created_at', $now)->get());
        $a6 = count(Applied::whereMonth('created_at', 6)->whereYear('created_at', $now)->get());
        $a7 = count(Applied::whereMonth('created_at', 7)->whereYear('created_at', $now)->get());
        $a8 = count(Applied::whereMonth('created_at', 8)->whereYear('created_at', $now)->get());
        $a9 = count(Applied::whereMonth('created_at', 9)->whereYear('created_at', $now)->get());
        $a10 = count(Applied::whereMonth('created_at', 10)->whereYear('created_at', $now)->get());
        $a11 = count(Applied::whereMonth('created_at', 11)->whereYear('created_at', $now)->get());
        $a12 = count(Applied::whereMonth('created_at', 12)->whereYear('created_at', $now)->get());

        array_push($this->applied, $this->persen($a1 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a2 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a3 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a4 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a5 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a6 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a7 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a8 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a9 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a10 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a11 ?? 0, $total_applied));
        array_push($this->applied, $this->persen($a12 ?? 0, $total_applied));

    }

    public function persen($val, $tot){
        // dd($val);
        $hasil = 0;
        if($val && $tot){
            $hasil = ($val / $tot) * (100 / 100);
        }
        return round($hasil*100);
    }
}
