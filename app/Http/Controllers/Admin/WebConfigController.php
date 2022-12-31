<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;

class WebConfigController extends Controller
{
    public function index()
    {
        $web_name = WebConfig::where('type', 'web_name')->first();
        if (!$web_name) {
            $web_name = new WebConfig();
            $web_name->type = 'web_name';
            $web_name->value = 'AMAR LAWYER';
            $web_name->save();
        }
        $data['web_name'] = $web_name->value;

        $phone = WebConfig::where('type', 'phone')->first();
        if (!$phone) {
            $phone = new WebConfig();
            $phone->type = 'phone';
            $phone->value = 0;
            $phone->save();
        }
        $data['phone'] = $phone->value;

        $fax = WebConfig::where('type', 'fax')->first();
        if (!$fax) {
            $fax = new WebConfig();
            $fax->type = 'fax';
            $fax->value = 0;
            $fax->save();
        }
        $data['fax'] = $fax->value;

        $address = WebConfig::where('type', 'address')->first();
        if (!$address) {
            $address = new WebConfig();
            $address->type = 'address';
            $address->value = null;
            $address->save();
        }
        $data['address'] = $address->value;

        $bg_color = WebConfig::where('type', 'bg_color')->first();
        if (!$bg_color) {
            $bg_color = new WebConfig();
            $bg_color->type = 'bg_color';
            $bg_color->value = null;
            $bg_color->save();
        }
        $data['bg_color'] = $bg_color->value;

        $data['title'] = 'Web Configuration';

        return view('admin.web_config.index', $data);
    }

    public function update_config(Request $request)
    {
        $web_name = WebConfig::where('type', 'web_name')->first();
        if ($web_name->value != $request->web_name) {
            $web_name->value = $request->web_name;
            $web_name->save();
            Toastr::success('Web Name Saved Successfully!');
        }
        $data['web_name'] = $web_name->value;

        $phone = WebConfig::where('type', 'phone')->first();
        if ($phone != $request->phone) {
            $phone->value = $request->phone;
            $phone->save();
            Toastr::success('Company Phone Saved Successfully!');
        }
        $data['phone'] = $phone->value;

        $fax = WebConfig::where('type', 'fax')->first();
        if ($fax != $request->fax) {
            $fax->value = $request->fax;
            $fax->save();
            Toastr::success('Company Fax Saved Successfully!');
        }
        $data['fax'] = $fax->value;

        $address = WebConfig::where('type', 'address')->first();
        if ($address != $request->address) {
            $address->value = $request->address;
            $address->save();
            Toastr::success('Company Address Saved Successfully!');
        }
        $data['address'] = $address->value;

        $bg_color = WebConfig::where('type', 'bg_color')->first();
        if ($bg_color != $request->bg_color) {
            $bg_color->value = $request->bg_color;
            $bg_color->save();

            Toastr::success('Background Color Saved Successfully!');
        }
        $data['bg_color'] = $bg_color->value;

        $data['title'] = 'Web Configuration';

        return view('admin.web_config.index', $data);
    }
}
