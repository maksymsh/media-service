<?php

namespace App\Http\Requests\Admin\Settings;

use App\Http\Requests\Admin\BaseFormRequest;

class GeneratSettingsRequest extends BaseFormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'site_name' => ['required', 'string'],
            'site_active' => ['required', 'boolean'],
        ];
    }
}
