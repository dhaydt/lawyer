<?php

namespace App\Http\Controllers;

use App\Models\Jobs;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Toastr;

class ApplyController extends Controller
{
    public function index($id)
    {
        $job= Jobs::find($id);
            if(!$job){
                Toastr::warning('Job Not Found or removed already!');
                return redirect()->back();
            }

            $data['title'] = 'Job Application';
            $data['judul'] = 'Apply for a '.$job['position'];
            $data['active'] = 'carrier';
            $data['data'] = $job;

            return view('Home.carrier.single', $data);
    }
}
