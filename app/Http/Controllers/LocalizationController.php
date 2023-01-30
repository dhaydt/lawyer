<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Http\Request;

class LocalizationController extends Controller
{
    public function lang(Request $request)
    {
        $locale = $request->lang;
        App::setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }
}
