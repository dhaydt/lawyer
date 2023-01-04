<?php

namespace App\Http\Controllers;

use App\Models\Services;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'AMAR Lawyer';
        $data['services'] = Services::where('status', 1)->get();

        return view('Home.index', $data);
    }
}
