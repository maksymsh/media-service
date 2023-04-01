<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $app_name;

    public string $app_description;

    public bool $app_active;

    public string $info_email;

    public string $sales_phone;

    public string $sales_email;

    public string $accounting_phone;

    public string $support_email;

    public string $support_phone;

    public string $support_phone2;

    public string $support_phone3;

    public string $support_phone4;

    public string $web_email;

    public string $partners_email;

    public string $hr_email;

    public string $hotline_email;

    public string $cso_email;

    public string $address;

    public string $schedule;

    public string $telegram;

    public string $viber;

    public string $facebook;

    public string $instagram;

    public string $youtube;

    public string $linkedin;

    public static function group(): string
    {
        return 'general';
    }
}
