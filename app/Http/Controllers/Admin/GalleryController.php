<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $data['title'] = 'Gallery Documentation';
        $data['active'] = 'gallery';

        return view('admin.gallery.gallery', $data);
    }
}
