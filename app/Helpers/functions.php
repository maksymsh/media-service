<?php

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
    function settings(string|array $key = null)
    {
        $settings = app('settings');

        if ($key) {
            return $settings->{$key};
        }

        return $settings;
    }
}
