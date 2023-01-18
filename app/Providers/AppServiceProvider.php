<?php

namespace App\Providers;

use App\CPU\Helpers;
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
            ];

            View::share(['web_config' => $web_config]);

            Schema::defaultStringLength(191);
        } catch (\Exception $ex) {
        }
    }
}
