<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
            $data['title'] = 'Gallery Documentation';
            $data['judul'] = 'Gallery';
            $data['active'] = 'gallery';

            return view('Home.gallery.gallery', $data);
    }
}
