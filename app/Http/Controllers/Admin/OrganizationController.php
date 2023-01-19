<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\WebConfig;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function index()
    {
        $who_we_are = WebConfig::where(function ($q) {
            $q->where('type', 'who_we_are');
        })->first();
        $case_count = WebConfig::where(function ($q) {
            $q->where('type', 'case_count');
        })->first();
        $exp_count= WebConfig::where(function ($q) {
            $q->where('type', 'exp_count');
        })->first();
        $photo = WebConfig::where(function ($q) {
            $q->where('type', 'organization_primary_image');
        })->first();
        $photoSecond = WebConfig::where(function ($q) {
            $q->where('type', 'organization_secondary_image');
        })->first();
        $exp_content = WebConfig::where(function ($q) {
            $q->where('type', 'exp_content');
        })->first();

        if(!$who_we_are){
            $who_we_are = new WebConfig();
            $who_we_are->type = 'who_we_are';
            $who_we_are->value = '';
            $who_we_are->save();
        }
        if(!$case_count){
            $case_count = new WebConfig();
            $case_count->type = 'case_count';
            $case_count->value = '';
            $case_count->save();
        }
        if(!$exp_count){
            $exp_count = new WebConfig();
            $exp_count->type = 'exp_count';
            $exp_count->value = '';
            $exp_count->save();
        }
        if(!$photo){
            $photo = new WebConfig();
            $photo->type = 'organization_primary_image';
            $photo->value = '';
            $photo->save();
        }
        if(!$photoSecond){
            $photoSecond = new WebConfig();
            $photoSecond->type = 'organization_secondary_image';
            $photoSecond->value = '';
            $photoSecond->save();
        }
        if(!$exp_content){
            $exp_content = new WebConfig();
            $exp_content->type = 'exp_content';
            $exp_content->value = '';
            $exp_content->save();
        }

        $data['title'] = 'Company & Organization';
        $data['active'] = 'organization';

        return view('admin.organization.organization', $data);
    }
}
