<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $data['title'] = 'AMAR Lawyer';

        return view('Home.index', $data);
    }
}
