<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecruitmentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Recruitment';
        $data['active'] = 'recruitment';

        return view('admin.recruitment.recruitment', $data);
    }
}
