<?php

namespace App\Http\Controllers\Admin;

use App\CPU\ImageManager;
use App\Http\Controllers\Controller;
use App\Models\WebConfig;
use Illuminate\Http\Request;
use Yoeunes\Toastr\Facades\Toastr;
use App\CPU\Helpers;

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

        $wa = WebConfig::where('type', 'wa')->first();
        if (!$wa) {
            $wa = new WebConfig();
            $wa->type = 'wa';
            $wa->value = '';
            $wa->save();
        }
        $data['wa'] = $wa->value;

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

        $email = WebConfig::where('type', 'email')->first();
        if (!$email) {
            $email = new WebConfig();
            $email->type = 'email';
            $email->value = 'admin@admin';
            $email->save();
        }
        $data['email'] = $email->value;

        $cp = WebConfig::where('type', 'company_profile')->first();
        if (!$cp) {
            $cp = new WebConfig();
            $cp->type = 'company_profile';
            $cp->value = null;
            $cp->save();
        }

        $data['company_profile'] = $cp->value;
        $web = WebConfig::all();
        $data['fb'] = Helpers::get_settings($web, 'fb')['value'];
        $data['ig'] = Helpers::get_settings($web, 'ig')['value'];
        $data['linkedin'] = Helpers::get_settings($web, 'linkedin')['value'];
        $data['twitter'] = Helpers::get_settings($web, 'twitter')['value'];
        $data['c1_title'] = json_decode(Helpers::get_settings($web, 'slider_content_1')['value'])->title;
        $data['c1_content'] = json_decode(Helpers::get_settings($web, 'slider_content_1')['value'])->content;
        $data['c1_icon'] = json_decode(Helpers::get_settings($web, 'slider_content_1')['value'])->icon;
       
        $data['c2_title'] = json_decode(Helpers::get_settings($web, 'slider_content_2')['value'])->title;
        $data['c2_content'] = json_decode(Helpers::get_settings($web, 'slider_content_2')['value'])->content;
        $data['c2_icon'] = json_decode(Helpers::get_settings($web, 'slider_content_2')['value'])->icon;
       
        $data['c3_title'] = json_decode(Helpers::get_settings($web, 'slider_content_3')['value'])->title;
        $data['c3_content'] = json_decode(Helpers::get_settings($web, 'slider_content_3')['value'])->content;
        $data['c3_icon'] = json_decode(Helpers::get_settings($web, 'slider_content_3')['value'])->icon;

        $data['title'] = 'Web Configuration';

        return view('admin.web_config.index', $data);
    }

    public function upload_company(Request $request)
    {
        $company = WebConfig::where('type', 'company_profile')->first();
        if ($request->has('file')) {
            $company->value = ImageManager::update('company_profile/', $company->value, 'pdf', $request->file('file'));

            $company->save();
        }
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

        $wa= WebConfig::where('type', 'wa')->first();
        if ($wa->value !== $request->wa) {
            $wa->value = $request->wa;
            $wa->save();
            Toastr::success('WhatsApp Consultation number Changed Successfully!');
        }
        $data['wa'] = $wa->value;
        
        $email= WebConfig::where('type', 'email')->first();
        if ($email->value !== $request->email) {
            $email->value = $request->email;
            $email->save();
            Toastr::success('Email Changed Successfully!');
        }
        $data['wa'] = $wa->value;

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
        
        $fb = WebConfig::where('type', 'fb')->first();
        if ($fb->value !== $request->fb) {
            $fb->value = $request->fb;
            $fb->save();
            Toastr::success('Facebook URL Changed Successfully!');
        }
        $data['fb'] = $fb->value;

        $ig = WebConfig::where('type', 'ig')->first();
        if ($ig->value !== $request->ig) {
            $ig->value = $request->ig;
            $ig->save();
            Toastr::success('Instagram URL Changed Successfully!');
        }
        $data['ig'] = $ig->value;

        $twitter = WebConfig::where('type', 'twitter')->first();
        if ($twitter->value !== $request->twitter) {
            $twitter->value = $request->twitter;
            $twitter->save();
            Toastr::success('Twitter URL Changed Successfully!');
        }
        $data['twitter'] = $twitter->value;

        $linkedin = WebConfig::where('type', 'linkedin')->first();
        if ($linkedin->value !== $request->linkedin) {
            $linkedin->value = $request->linkedin;
            $linkedin->save();
            Toastr::success('LinkedIn URL Changed Successfully!');
        }
        $data['linkedin'] = $linkedin->value;
        
        $c1_title = WebConfig::where('type', 'slider_content_1')->first();
        $e1_title = json_decode($c1_title->value);
        if ($e1_title->title !== $request->c1_title || $e1_title->content!== $request->c1_content || $request->has('c1_icon')) {
            if ($request->has('c1_icon')) {
                $c1_ic = ImageManager::update('company/', $e1_title->icon, 'png', $request->file('c1_icon'));
                $c1_title->value = json_encode(['icon' => $c1_ic, 'title' => $request->c1_title, 'content' => $request->c1_content]);
            }else{
                $c1_title->value = json_encode(['icon' => $e1_title->icon, 'title' => $request->c1_title, 'content' => $request->c1_content]);
            }
            $c1_title->save();
            Toastr::success('Content slider 1 Changed Successfully!');
        }
        $data['c1_title'] = $e1_title->title;
        $data['c1_content'] = $e1_title->content;
        
        $c2_title = WebConfig::where('type', 'slider_content_2')->first();
        $e2_title = json_decode($c2_title->value);
        if ($e2_title->title !== $request->c2_title || $e2_title->content!== $request->c2_content || $request->has('c2_icon')) {
            if ($request->has('c2_icon')) {
                $c2_ic = ImageManager::update('company/', $e2_title->icon, 'png', $request->file('c2_icon'));
                $c2_title->value = json_encode(['icon' => $c2_ic, 'title' => $request->c2_title, 'content' => $request->c2_content]);
            }else{
                $c2_title->value = json_encode(['icon' => $e2_title->icon, 'title' => $request->c2_title, 'content' => $request->c2_content]);
            }
            $c2_title->save();
            Toastr::success('Content slider 2 Changed Successfully!');
        }
        $data['c2_title'] = $e2_title->title;
        $data['c2_content'] = $e2_title->content;
        
        $c3_title = WebConfig::where('type', 'slider_content_3')->first();
        $e3_title = json_decode($c3_title->value);
        if ($e3_title->title !== $request->c3_title || $e3_title->content!== $request->c3_content || $request->has('c3_icon')) {
            if ($request->has('c3_icon')) {
                $c3_ic = ImageManager::update('company/', $e3_title->icon, 'png', $request->file('c3_icon'));
                $c3_title->value = json_encode(['icon' => $c3_ic, 'title' => $request->c3_title, 'content' => $request->c3_content]);
            }else{
                $c3_title->value = json_encode(['icon' => $e3_title->icon, 'title' => $request->c3_title, 'content' => $request->c3_content]);
            }
            $c3_title->save();
            Toastr::success('Content slider 3 Changed Successfully!');
        }
        $data['c1_title'] = $e1_title->title;
        $data['c1_content'] = $e1_title->content;

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
