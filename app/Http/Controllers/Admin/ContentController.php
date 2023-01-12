<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class ContentController extends Controller
{
    public function index()
    {
        $data['title'] = 'Posts & Journals';
        $data['active'] = 'content';

        return view('admin.content.content', $data);
    }
}
