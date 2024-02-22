<?php

namespace App\Http\Controllers;

use App\Models\Content;

class ContentController extends Controller
{
    public function index($id)
    {
        $locale = session()->get('locale');
        if(!$locale){
            session()->put('locale', 'id');
        }
        $content = Content::find($id);
        if (!$content) {
            return redirect()->route('home');
        } else {
            $data['title'] = 'Post & Journals';
            $data['judul'] = $content->title;
            $data['content'] = $content;
            $data['active'] = 'content';

            return view('Home.content.single', $data);
        }
    }
}
