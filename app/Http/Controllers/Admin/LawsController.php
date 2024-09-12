<?php

namespace App\Http\Controllers\Admin;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Models\LawIsi;
use App\Models\LawName;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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

    public function details($id)
    {
        $law = LawName::with('isi')->find($id);
        $data['data'] = $law;
        $data['title'] = 'Undang undang No. ' . $law['nomor'] . ' tentang ' . $law['tentang'] . ' Tahun ' . $law['tahun'];
        $data['law_id'] = $id;

        return view('admin.laws.details.index', $data);
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
        $service->keterangan = $request->keterangan;
        $service->status = 1;

        if ($request->hasFile('file')) {

            // Storage::delete('public/laws/'.$service->file);

            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'law_' . time() . '.' . $extension;
            // Upload Image
            $request->file('file')->storeAs('public/laws', $fileNameToStore);

            $service->file = 'laws/'. $fileNameToStore;

        }

        $service->save();

        Toastr::success('Laws added successfully!');

        return redirect()->back();
    }

    public function details_post(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pasal' => 'required',
            'isi' => 'required',
        ], [
            'pasal.required' => 'Laws number is required!',
            'isi.required' => 'Years of law is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = new LawIsi();
        $service->pasal = $request->pasal;
        $service->isi = $request->isi;
        $service->law_id = $request->law_id;

        $service->save();

        Toastr::success('Chapter added successfully!');

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

        if ($request->hasFile('file')) {

            Storage::delete('public/laws/'.$service->file);

            // Get filename with the extension
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('file')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = 'law_' . time() . '.' . $extension;
            // Upload Image
            $request->file('file')->storeAs('public/laws', $fileNameToStore);

            $service->file = 'laws/'. $fileNameToStore;

        }

        $service->nomor = $request->number;
        $service->tahun = $request->year;
        $service->tentang = $request->about;
        $service->keterangan = $request->keterangan;
        $service->save();

        Toastr::success('Laws updated Successfully!');

        return redirect()->back();
    }

    public function details_update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'pasal' => 'required',
            'isi' => 'required',
        ], [
            'pasal.required' => 'Laws number is required!',
            'isi.required' => 'Years of law is required!',
        ]);

        if ($validator->errors()->count() > 0) {
            $errors = Helpers::error_processor($validator);
            foreach ($errors as $e) {
                Toastr::warning($e['message']);
            }

            return redirect()->back();
        }

        $service = LawIsi::find($request->id);
        if (!$service) {
            Toastr::warning('Chapters not found!');

            return redirect()->back();
        }

        $service->pasal = $request->pasal;
        $service->isi = $request->isi;
        $service->save();

        Toastr::success('Chapters updated Successfully!');

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

    public function details_delete($id)
    {
        $service = LawIsi::find($id);
        if (!$service) {
            Toastr::warning('Chapters not found!');
        }

        $service->delete();
        Toastr::success('Chapters deleted successfully!');

        return redirect()->back();
    }
}
