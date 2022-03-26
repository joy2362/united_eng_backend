<?php

namespace App\Enums;

/*
 * @method static SettingName APP_NAME()
 * @method static SettingName APP_EMAIL_ONE()
 * @method static SettingName APP_EMAIL_TWO()
 * @method static SettingName APP_MOBILE_ONE()
 * @method static SettingName APP_MOBILE_TWO()
 * @method static SettingName ABOUT_US()
 * @method static SettingName FACEBOOK()
 * @method static SettingName GOOGLE()
 * @method static SettingName LINKEDIN()
 * @method static SettingName OPENING_TIME()
 * @method static SettingName WEEKDAY_START()
 * @method static SettingName WEEKDAY_END()
 */
class SettingName extends Enum
{
    private const APP_NAME   = 'app_name';
    private const APP_EMAIL_ONE    = 'app_email_one';
    private const APP_EMAIL_TWO   = 'app_email_one';
    private const APP_MOBILE_ONE    = 'app_mobile_two';
    private const APP_MOBILE_TWO    = 'app_mobile_two';
    private const ABOUT_US    = 'about_us';
    private const FACEBOOK    = 'facebook';
    private const GOOGLE    = 'google';
    private const LINKEDIN    = 'linkedin';
    private const OPENING_HOUR    = 'opening_hour';
    private const CLOSING_HOUR    = 'closing_hour';
    private const WEEKDAY_START    = 'weekday_start';
    private const WEEKDAY_END    = 'weekday_end';
}