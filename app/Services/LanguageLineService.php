<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Spatie\TranslationLoader\LanguageLine;

class LanguageLineService
{
    public function sync(Request $request, Model $model, string $code)
    {
        $languageLines = $request->get('language_lines', []);

        foreach ($languageLines as $key => $value) {
            LanguageLine::query()->updateOrCreate([
                'group' => 'pages',
                'key' => $code.'.'.$key,
            ], [
                'group' => 'pages',
                'key' => $code.'.'.$key,
                'text' => [app()->getLocale() => $value],
            ]);
        }
    }
}
