<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public string $app_name;

    public string $app_description;

    public bool $app_active;

    public static function group(): string
    {
        return 'general';
    }
}
