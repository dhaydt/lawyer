<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class HashtagController extends Controller
{
    public function index()
    {
        $data['title'] = 'Hashtag';
        $data['active'] = 'hashtag';

        return view('admin.hashtag.hashtag', $data);
    }
}
