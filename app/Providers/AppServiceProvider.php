<?php

namespace App\Providers;

use App\CPU\Helpers;
use App\Models\Banner;
use App\Models\Services;
use App\Models\WebConfig;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $check_banner = WebConfig::where('type', 'slider_content_1')->first();
        $check_banner2 = WebConfig::where('type', 'slider_content_2')->first();
        $check_banner3 = WebConfig::where('type', 'slider_content_3')->first();
        $check_fb = WebConfig::where('type', 'fb')->first();
        $check_twitter = WebConfig::where('type', 'twitter')->first();
        $check_ig = WebConfig::where('type', 'ig')->first();
        $check_linkedin = WebConfig::where('type', 'linkedin')->first();
        $checkBannerInformation = WebConfig::where('type', 'banner_info')->first();
        $heroBanner = Banner::where('banner_type', 'hero')->first();

        if(!$heroBanner){
            $ban = new Banner();
            $ban->banner_type = 'hero';
            $ban->photo = '';
            $ban->save();
        }

        if(!$checkBannerInformation){
            $bi = new WebConfig();
            $bi->type = 'banner_info';
            $bi->value = '';
            $bi->save();
        }

        if(!$check_fb){
            $fb = new WebConfig();
            $fb->type = 'fb';
            $fb->value = '';
            $fb->save();
        }

        if(!$check_twitter){
            $twitter = new WebConfig();
            $twitter->type = 'twitter';
            $twitter->value = '';
            $twitter->save();
        }

        if(!$check_ig){
            $ig = new WebConfig();
            $ig->type = 'ig';
            $ig->value = '';
            $ig->save();
        }

        if(!$check_linkedin){
            $linkedin = new WebConfig();
            $linkedin->type = 'linkedin';
            $linkedin->value = '';
            $linkedin->save();
        }
        if(!$check_banner){
            $new = new WebConfig();
            $new->type = 'slider_content_1';
            $new->value = json_encode([
                'icon' => null,
                'title' => 'Request Quote',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.'
            ]);
            $new->save();
        }
        if(!$check_banner2){
            $new2 = new WebConfig();
            $new2->type = 'slider_content_2';
            $new2->value = json_encode([
                'icon' => null,
                'title' => 'Investigation',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.'
            ]);
            $new2->save();
        }
        if(!$check_banner3){
            $new3 = new WebConfig();
            $new3->type = 'slider_content_3';
            $new3->value = json_encode([
                'icon' => null,
                'title' => 'Case Fight',
                'content' => 'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem.'
            ]);
            $new3->save();
        }
        try {
            $web = WebConfig::all();
            $web_config = [
                'bg_color' => Helpers::get_settings($web, 'bg_color')['value'],
                'name' => Helpers::get_settings($web, 'web_name')['value'],
                'phone' => Helpers::get_settings($web, 'phone')['value'],
                'web_logo' => Helpers::get_settings($web, 'web_logo')['value'],
                'web_icon' => Helpers::get_settings($web, 'web_icon')['value'],
                'address' => Helpers::get_settings($web, 'address')['value'],
                'fax' => Helpers::get_settings($web, 'fax')['value'],
                'email' => Helpers::get_settings($web, 'email')['value'],
                'company_profile' => Helpers::get_settings($web, 'company_profile')['value'],
                'about_image' => Helpers::get_settings($web, 'about_image')['value'],
                'expertise' => Helpers::get_settings($web, 'expertise')['value'],
                'about_us' => Helpers::get_settings($web, 'about_us')['value'],
                'we_are' => Helpers::get_settings($web, 'who_we_are')['value'],
                'case_count' => Helpers::get_settings($web, 'case_count')['value'],
                'exp_count' => Helpers::get_settings($web, 'exp_count')['value'],
                'primary_image' => Helpers::get_settings($web, 'organization_primary_image')['value'],
                'secondary_image' => Helpers::get_settings($web, 'organization_secondary_image')['value'],
                'exp_content' => Helpers::get_settings($web, 'exp_content')['value'],
                'wa' => Helpers::get_settings($web, 'wa')['value'],
                'services' => Services::orderBy('created_at', 'desc')->get(),
                'slider_content_1' => json_decode(Helpers::get_settings($web, 'slider_content_1')['value']),
                'slider_content_2' => json_decode(Helpers::get_settings($web, 'slider_content_2')['value']),
                'slider_content_3' => json_decode(Helpers::get_settings($web, 'slider_content_3')['value']),
                'fb' => Helpers::get_settings($web, 'fb')['value'],
                'ig' => Helpers::get_settings($web, 'ig')['value'],
                'twitter' => Helpers::get_settings($web, 'twitter')['value'],
                'linkedin' => Helpers::get_settings($web, 'linkedin')['value'],
                'banner_info' => Helpers::get_settings($web, 'banner_info')['value'],
                'hero_banner' => Banner::where('banner_type', 'hero')->first()['photo'],
            ];

            View::share(['web_config' => $web_config]);

            Schema::defaultStringLength(191);
        } catch (\Exception $ex) {
        }
    }
}
