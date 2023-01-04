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

    public function about_us()
    {
        $data['title'] = 'About Us';

        return view('Home.about.index', $data);
    }

    public function organization()
    {
        $data['title'] = 'Company & Organization';

        return view('Home.organization.index', $data);
    }

    public function posting()
    {
        $data['title'] = 'Posts & Journals';

        return view('Home.content.index', $data);
    }
}
