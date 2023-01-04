<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class ServicesController extends Controller
{
    public function index()
    {
        $data['services'] = Services::where('status', 1)->get();
        $data['title'] = 'Legal Services';

        return view('admin.services.index', $data);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Service title is required!',
            'description.required' => 'Service description is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = new Services();
        $service->title = $request->title;
        $service->description = $request->description;
        $service->status = 1;
        $service->logo = ImageManager::upload('services/', 'png', $request->file('img'));

        $service->save();

        Toastr::success('Service added successfully!');

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
        ], [
            'title.required' => 'Service title is required!',
            'description.required' => 'Service description is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = Services::find($request->id);
        if (!$service) {
            Toastr::warning('Service not found!');

            return redirect()->back();
        }
        $service->title = $request->title;
        $service->description = $request->description;
        $service->logo = ImageManager::update('services/', $service['logo'], 'png', $request->file('img'));

        $service->save();

        Toastr::success('Service updated Successfully!');

        return redirect()->back();
    }

    public function delete($id)
    {
        $service = Services::find($id);
        if (!$service) {
            Toastr::warning('Service not found!');
        }
        ImageManager::delete('banner/', $service['logo']);

        $service->delete();
        Toastr::success('Service deleted successfully!');

        return redirect()->back();
    }
}
