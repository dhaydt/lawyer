<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ClientController extends Controller
{
    public function index()
    {
        $data['title'] = 'List Client';
        $data['active'] = 'client';

        return view('admin.client.client', $data);
    }
}
