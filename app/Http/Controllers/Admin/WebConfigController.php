<?php

namespace App\Http\Controllers\Admin;

use App\CPU\ImageManager;
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

        $logo = WebConfig::where('type', 'web_logo')->first();
        if (!$logo) {
            $logo = new WebConfig();
            $logo->type = 'web_logo';
            $logo->value = 'def.png';
            $logo->save();
        }
        $data['logo'] = $logo->value;

        $icon = WebConfig::where('type', 'web_icon')->first();
        if (!$icon) {
            $icon = new WebConfig();
            $icon->type = 'web_icon';
            $icon->value = 'def.png';
            $icon->save();
        }
        $data['icon'] = $icon->value;

        $data['title'] = 'Web Configuration';

        return view('admin.web_config.index', $data);
    }

    public function update_config(Request $request)
    {
        $logo = WebConfig::where('type', 'web_logo')->first();
        if ($request->has('img')) {
            $logo->value = ImageManager::update('company/', $logo->value, 'png', $request->file('img'));
            $logo->save();

            Toastr::success('Web Logo updated successfully');
            $data['logo'] = $logo->value;
        }

        $icon = WebConfig::where('type', 'web_icon')->first();
        if ($request->has('icon')) {
            $icon->value = ImageManager::update('company/', $icon->value, 'png', $request->file('icon'));
            $icon->save();

            Toastr::success('Web icon updated successfully');
            $data['icon'] = $icon->value;
        }
        $data['icon'] = $logo->value;

        $web_name = WebConfig::where('type', 'web_name')->first();
        if ($web_name->value !== $request->web_name) {
            $web_name->value = $request->web_name;
            $web_name->save();
            Toastr::success('Web Name Changed Successfully!');
        }
        $data['web_name'] = $web_name->value;

        $phone = WebConfig::where('type', 'phone')->first();
        if ($phone->value !== $request->phone) {
            $phone->value = $request->phone;
            $phone->save();
            Toastr::success('Company Phone Changed Successfully!');
        }
        $data['phone'] = $phone->value;

        $fax = WebConfig::where('type', 'fax')->first();
        if ($fax->value !== $request->fax) {
            $fax->value = $request->fax;
            $fax->save();
            Toastr::success('Company Fax Changed Successfully!');
        }
        $data['fax'] = $fax->value;

        $address = WebConfig::where('type', 'address')->first();
        if ($address->value !== $request->address) {
            $address->value = $request->address;
            $address->save();
            Toastr::success('Company Address Changed Successfully!');
        }
        $data['address'] = $address->value;

        $bg_color = WebConfig::where('type', 'bg_color')->first();
        if ($bg_color->value !== $request->bg_color) {
            $bg_color->value = $request->bg_color;
            $bg_color->save();

            Toastr::success('Background Color Changed Successfully!');
        }
        $data['bg_color'] = $bg_color->value;

        $data['title'] = 'Web Configuration';

        return redirect()->back();
    }
}
