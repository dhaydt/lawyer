<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class BannerController extends Controller
{
    public function index()
    {
        $data['title'] = 'Banner Configuration';
        $data['banner'] = Banner::get();

        return view('admin.banner.index', $data);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required',
        ], [
            'img.required' => 'Banner image is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $banner = new Banner();
        $banner->banner_type = 'main';
        $banner->url = null;
        $banner->is_active = 1;
        $banner->photo = ImageManager::upload('banner/', 'png', $request->file('img'));

        $banner->save();
        Toastr::success('Banner added successfully!');

        return back();
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'img' => 'required',
        ], [
            'img.required' => 'Banner image is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $banner = Banner::find($id);
        $banner->photo = ImageManager::update('banner/', $banner['photo'], 'png', $request->file('img'));
        $banner->save();

        Toastr::success('Banner updated successfully!');

        return back();
    }
}
