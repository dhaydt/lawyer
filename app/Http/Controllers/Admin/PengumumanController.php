<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function index()
    {
        $data['title'] = 'Pengumuman';
        $data['active'] = 'pengumuman';

        return view('admin.pengumuman.pengumuman', $data);
    }
}
