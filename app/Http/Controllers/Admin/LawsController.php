<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Models\LawName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yoeunes\Toastr\Facades\Toastr;

class LawsController extends Controller
{
    public function index()
    {
        $data['services'] = LawName::get();
        $data['title'] = 'Laws';

        return view('admin.laws.index', $data);
    }

    public function post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nomor' => 'required',
            'year' => 'required',
            'about' => 'required',
        ], [
            'nomor.required' => 'Laws number is required!',
            'year.required' => 'Years of law is required!',
            'about.required' => 'Laws about is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = new LawName();
        $service->nomor = $request->nomor;
        $service->tahun = $request->year;
        $service->tentang = $request->about;
        $service->status = 1;

        $service->save();

        Toastr::success('Laws added successfully!');

        return redirect()->back();
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'number' => 'required',
            'year' => 'required',
            'about' => 'required',
        ], [
            'number.required' => 'Laws number is required!',
            'year.required' => 'Years of law is required!',
            'about.required' => 'Laws about is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = LawName::find($request->id);
        if (!$service) {
            Toastr::warning('Laws not found!');

            return redirect()->back();
        }

        $service->nomor = $request->number;
        $service->tahun = $request->year;
        $service->tentang = $request->about;
        $service->save();

        Toastr::success('Laws updated Successfully!');

        return redirect()->back();
    }

    public function delete($id)
    {
        $service = LawName::find($id);
        if (!$service) {
            Toastr::warning('Laws not found!');
        }

        $service->delete();
        Toastr::success('Laws deleted successfully!');

        return redirect()->back();
    }
}
