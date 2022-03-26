<?php

namespace App\Http\Controllers\Admin;

use App\Enums\SettingName;
use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SettingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function index(){
        $app_name = Setting::where('name',SettingName::APP_NAME())->first();
        $app_email_one = Setting::select('value')->where('name',SettingName::APP_EMAIL_ONE())->first();
        $app_email_two = Setting::select('value')->where('name',SettingName::APP_EMAIL_TWO())->first();
        $app_mobile_one = Setting::select('value')->where('name',SettingName::APP_MOBILE_ONE())->first();
        $app_mobile_two  = Setting::select('value')->where('name',SettingName::APP_MOBILE_TWO())->first();

        $facebook  = Setting::select('value')->where('name',SettingName::FACEBOOK())->first();
        $google  = Setting::select('value')->where('name',SettingName::GOOGLE())->first();
        $linkedin  = Setting::select('value')->where('name',SettingName::LINKEDIN())->first();

        $weekday_start  = Setting::select('value')->where('name',SettingName::WEEKDAY_START())->first();
        $weekday_end  = Setting::select('value')->where('name',SettingName::WEEKDAY_END())->first();

        $opening_hour  = Setting::select('value')->where('name',SettingName::OPENING_HOUR())->first();
        $closing_hour  = Setting::select('value')->where('name',SettingName::CLOSING_HOUR())->first();

        $about_us = Setting::where('name',SettingName::ABOUT_US())->first();

        return view('admin.pages.setting.index',[
            "App_Name" => $app_name->value,
            "App_logo" => $app_name->AppLogo,
            "App_icon" => $app_name->AppIcon,

            "App_Mobile_One" => $app_mobile_one->value,
            "App_Mobile_Two" => $app_mobile_two->value,
            "App_Email_One" => $app_email_one->value,
            "App_Email_Two" => $app_email_two->value,
            "About_Us" => $about_us->value,
            "About_Us_Image" => $about_us->AboutUsImage,

            "Facebook" => $facebook->value,
            "Google" => $google->value,
            "Linkedin" => $linkedin->value,

            "Opening_hour" => $opening_hour->value,
            "Closing_hour" => $closing_hour->value,

            "Weekday_start" => $weekday_start->value,
            "Weekday_end" => $weekday_end->value,

            ]);
    }

    public function change_logo(Request $request){
        $request->validate([
            'logo' => 'required',
        ]);

       $setting = Setting::where('name',SettingName::APP_NAME())->first();

        if ($request->has('logo')) {
            $setting->addMedia($request->file('logo'))->toMediaCollection('app_logo');
        }

        $notification = array(
            'messege' => 'Application Logo Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);
    }


    public function change_icon(Request $request){
        $request->validate([
            'icon' => 'required',
        ]);

        $setting = Setting::where('name',SettingName::APP_NAME())->first();

        if ($request->has('icon')) {
            $setting->addMedia($request->file('icon'))->toMediaCollection('app_icon');
        }

        $notification = array(
            'messege' => 'Application Icon Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);


    }

    public function change_about_us_image(Request $request){
        $request->validate([
            'aboutUs' => 'required',
        ]);

        $setting = Setting::where('name',SettingName::ABOUT_US())->first();

        if ($request->has('aboutUs')) {
            $setting->addMedia($request->file('aboutUs'))->toMediaCollection('feather_image');
        }

        $notification = array(
            'messege' => 'About us Image Changed Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }

    public function update(Request $request){
        $request->validate([
            'name' => 'required',
            'email_one' => 'required|email',
            'email_two' => 'required|email',
            'phone_one' => 'required',
            'phone_two' => 'required',
            'about_us' => 'required',
            'facebook' => 'required',
            'google' => 'required',
            'linkedin' => 'required',
            'opening_hour' => 'required',
            'closing_hour' => 'required',
            'weekday_start' => 'required',
            'weekday_end' => 'required',
        ]);

        Setting::where('name',SettingName::APP_NAME())->update([
            'value' => $request->input('name')
        ]);

        Setting::where('name',SettingName::APP_EMAIL_ONE())->update([
            'value' => $request->input('email_one')
        ]);

        Setting::where('name',SettingName::APP_EMAIL_TWO())->update([
            'value' => $request->input('email_two')
        ]);

        Setting::where('name',SettingName::APP_MOBILE_ONE())->update([
            'value' => $request->input('phone_one')
        ]);

        Setting::where('name',SettingName::APP_MOBILE_TWO())->update([
            'value' => $request->input('phone_two')
        ]);

        Setting::where('name',SettingName::ABOUT_US())->update([
            'value' => $request->input('about_us')
        ]);

        Setting::where('name',SettingName::FACEBOOK())->update([
            'value' => $request->input('facebook')
        ]);

        Setting::where('name',SettingName::GOOGLE())->update([
            'value' => $request->input('google')
        ]);

        Setting::where('name',SettingName::LINKEDIN())->update([
            'value' => $request->input('linkedin')
        ]);

        Setting::where('name',SettingName::OPENING_HOUR())->update([
            'value' => $request->input('opening_hour')
        ]);

        Setting::where('name',SettingName::CLOSING_HOUR())->update([
            'value' => $request->input('closing_hour')
        ]);

        Setting::where('name',SettingName::WEEKDAY_START())->update([
            'value' => $request->input('weekday_start')
        ]);

        Setting::where('name',SettingName::WEEKDAY_END())->update([
            'value' => $request->input('weekday_end')
        ]);

        $notification = array(
            'messege' => 'Application Setting Updated Successfully!',
            'alert-type' => 'success'
        );

        return Redirect()->back()->with($notification);

    }
}
