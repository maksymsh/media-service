<?php

use App\Settings\GeneralSettings;

if (! function_exists('app_host')) {
    function app_host()
    {
        $url = parse_url(config('app.url'));

        return $url['host'];
    }
}

if (! function_exists('routeActive')) {
    /**
     * Get the active class if the condition is not falsy.
     *
     * @param  string|array  $routeName
     * @return bool
     */
    function routeActive($routeName)
    {
        $match = false;
        $currentName = request()->route()->getName();
        if (is_array($routeName)) {
            foreach ($routeName as $route) {
                $match = $currentName === $route ||
                    (str_ends_with($route, '*') && str_starts_with($currentName, rtrim($route, '*')));
                if ($match) {
                    return true;
                }
            }
        } else {
            $match = $currentName === $routeName ||
                (str_ends_with($routeName, '*') && str_starts_with($currentName, rtrim($routeName, '*')));
        }

        return $match;
    }
}

if (! function_exists('settings')) {
    function settings(string|array $key = null): GeneralSettings|string
    {
        $settings = app('settings');

        if ($key) {
            return $settings->{$key};
        }

        return $settings;
    }
}

if (! function_exists('rawPhone')) {
    function rawPhone(string $phone): string
    {
        return preg_replace('/\D/', '', $phone);
    }
}

if (! function_exists('videoPreview')) {
    function videoPreview(string $url): string
    {
        $parts = explode('/', $url);
        $code = array_pop($parts);

        return 'https://i3.ytimg.com/vi/'.$code.'/maxresdefault.jpg';
    }
}
