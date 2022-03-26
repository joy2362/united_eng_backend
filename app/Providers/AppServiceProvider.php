<?php

namespace App\Providers;

use App\Enums\SettingName;
use App\Models\Setting;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view)
        {
            $app_name = Setting::where('name',SettingName::APP_NAME())->first();
            $app_email_one = Setting::select('value')->where('name',SettingName::APP_EMAIL_ONE())->first();
            $app_email_two = Setting::select('value')->where('name',SettingName::APP_EMAIL_TWO())->first();
            $app_mobile_one = Setting::select('value')->where('name',SettingName::APP_MOBILE_ONE())->first();
            $app_mobile_two  = Setting::select('value')->where('name',SettingName::APP_MOBILE_TWO())->first();
            $about_us = Setting::select('value')->where('name',SettingName::ABOUT_US())->first();

            $view->with([
                'app_name'=> $app_name->value,
                'app_logo'=> $app_name->applogo,
                'app_email_one'=>$app_email_one->value,
                'app_email_two'=>$app_email_two->value,

                'app_mobile_one'=>$app_mobile_one->value,
                'app_mobile_two'=>$app_mobile_two->value,
                'about_us'=>$about_us->value,
            ]);
        });
    }
}
