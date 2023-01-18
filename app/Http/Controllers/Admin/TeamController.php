<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    public function index()
    {
        $data['title'] = 'Team';
        $data['active'] = 'team';

        return view('admin.team.team', $data);
    }
}
