<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        $data['title'] = 'Categories';
        $data['active'] = 'category';

        return view('admin.category.category', $data);
    }
}
