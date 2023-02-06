<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data['title'] = 'Profile';
        $data['active'] = 'profile';

        return view('admin.profile.profile', $data);
    }
}
