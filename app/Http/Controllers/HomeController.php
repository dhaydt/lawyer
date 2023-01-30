<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Pengumuman;
use App\Models\Services;
use App\Models\Team;

class HomeController extends Controller
{
    public function index()
    {
        $lang = session()->get('locale');
        if(!$lang){
            session()->put('locale', 'en');
        }
        $data['title'] = 'AMAR Lawyer';
        $data['active'] = 'home';
        $data['services'] = Services::where('status', 1)->get();

        return view('Home.index', $data);
    }

    public function about_us()
    {
        $data['title'] = 'About Us';
        $data['active'] = 'about_us';
        $team = Team::get();
        $com = [];
        $i = 0;
        for ($y = 0; $y < count($team); ++$y) {
            if (!isset($com[$i])) {
                array_push($com, []);
            }
            array_push($com[$i], $team[$y]);
            if (count($com[$i]) > 1) {
                $i = $i + 1;
            }
        }
        $data['team'] = $com;

        return view('Home.about.index', $data);
    }

    public function organization()
    {
        $data['title'] = 'Company & Organization';
        $data['active'] = 'organization';
        $data['client'] = Client::get();

        return view('Home.organization.index', $data);
    }

    public function posting()
    {
        $data['title'] = 'Posts & Journals';
        $data['active'] = 'content';

        return view('Home.content.index', $data);
    }

    public function services()
    {
        $data['title'] = 'Our Legal Services';
        $data['active'] = 'services';
        $data['services'] = Services::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('Home.services.index', $data);
    }

    public function consultation()
    {
        $data['title'] = 'Consultation';
        $data['active'] = 'consultation';

        return view('Home.consultation.index', $data);
    }

    public function contact_us()
    {
        $data['title'] = 'Contact Us';
        $data['active'] = 'contact_us';

        return view('Home.contact_us.index', $data);
    }

    public function information()
    {
        $data['title'] = 'Other Information';
        $data['active'] = 'information';
        $data['notif'] = Pengumuman::where('status', 1)->orderBy('created_at', 'desc')->get();

        return view('Home.information.index', $data);
    }

    public function carrier()
    {
        $data['title'] = 'Carrier';
        $data['active'] = 'carrier';

        return view('Home.carrier.index', $data);
    }
}
