<?php

namespace Database\Seeders;

use App\Enums\SettingName;
use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate(
            [
                'name' => SettingName::APP_NAME(),
            ],
            [
                'name' =>  SettingName::APP_NAME(),
                'value' => "United Engineering",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::APP_EMAIL_ONE(),
            ],
            [
                'name' => SettingName::APP_EMAIL_ONE(),
                'value' => "admin@admin.com",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::APP_EMAIL_TWO(),
            ],
            [
                'name' => SettingName::APP_EMAIL_TWO(),
                'value' => "admin@admin.com",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::APP_MOBILE_ONE(),
            ],
            [
                'name' => SettingName::APP_MOBILE_ONE(),
                'value' => "01780134797",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::APP_MOBILE_TWO(),
            ],
            [
                'name' => SettingName::APP_MOBILE_TWO(),
                'value' => "01780134797",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::FACEBOOK(),
            ],
            [
                'name' => SettingName::FACEBOOK(),
                'value' => "https://www.facebook.com/",
            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::ABOUT_US(),
            ],
            [
                'name' => SettingName::ABOUT_US(),
                'value' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.",

            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::GOOGLE(),
            ],
            [
                'name' => SettingName::GOOGLE(),
                'value' => "https://www.facebook.com/",

            ]
        );
        Setting::updateOrCreate(
            [
                'name' => SettingName::LINKEDIN(),
            ],
            [
                'name' => SettingName::LINKEDIN(),
                'value' => "https://www.facebook.com/",

            ]
        );
        Setting::updateOrCreate(
            [
                'name' => SettingName::OPENING_HOUR(),
            ],
            [
                'name' => SettingName::OPENING_HOUR(),
                'value' => "9:00",

            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::CLOSING_HOUR(),
            ],
            [
                'name' => SettingName::CLOSING_HOUR(),
                'value' => "18:00",

            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::WEEKDAY_START(),
            ],
            [
                'name' => SettingName::WEEKDAY_START(),
                'value' => "Saturday",

            ]
        );

        Setting::updateOrCreate(
            [
                'name' => SettingName::WEEKDAY_END(),
            ],
            [
                'name' => SettingName::WEEKDAY_END(),
                'value' => "Thursday",

            ]
        );


    }
}
