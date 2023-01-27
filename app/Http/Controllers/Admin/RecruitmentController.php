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

    public function applied()
    {
        $data['title'] = 'Applied Job';
        $data['active'] = 'applied';

        return view('admin.applied.applied', $data);
    }
}
