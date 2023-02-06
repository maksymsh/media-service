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
            'app_name' => ['nullable', 'string'],
            'app_description' => ['nullable', 'string'],
            'app_active' => ['nullable', 'boolean'],
        ];
    }
}
