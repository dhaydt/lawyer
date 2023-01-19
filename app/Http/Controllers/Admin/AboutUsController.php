<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = WebConfig::where('type', 'about_us')->first();
        $expertise = WebConfig::where('type', 'expertise')->first();
        $aboutImage= WebConfig::where('type', 'about_image')->first();

        if(!$about){
            $about = new WebConfig();
            $about->type = 'about_us';
            $about->value = '';
            $about->save();
        }
        if(!$expertise){
            $expertise = new WebConfig();
            $expertise->type = 'expertise';
            $expertise->value = '';
            $expertise->save();
        }
        if(!$aboutImage){
            $aboutImage = new WebConfig();
            $aboutImage->type = 'about_image';
            $aboutImage->value = '';
            $aboutImage->save();
        }

        $data['title'] = 'About Us';
        $data['active'] = 'about_us';

        return view('admin.about_us.about_us', $data);
    }
}
