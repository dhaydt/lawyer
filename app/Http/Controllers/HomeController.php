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

    public function services()
    {
        $data['title'] = 'Our Legal Services';

        return view('Home.services.index', $data);
    }

    public function consultation()
    {
        $data['title'] = 'Consultation';

        return view('Home.consultation.index', $data);
    }

    public function contact_us()
    {
        $data['title'] = 'Contact Us';

        return view('Home.contact_us.index', $data);
    }

    public function information()
    {
        $data['title'] = 'Other Information';

        return view('Home.information.index', $data);
    }

    public function carrier()
    {
        $data['title'] = 'Carrier';

        return view('Home.carrier.index', $data);
    }
}
