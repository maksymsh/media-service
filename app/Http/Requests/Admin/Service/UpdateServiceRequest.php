<?php

namespace App\Http\Requests\Admin\Service;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateServiceRequest extends BaseFormRequest
{
    /**
     * Determine if the service is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'top' => ['nullable'],
            'bottom' => ['nullable'],
            'published' => ['nullable'],
            'name' => ['required'],
            'slug' => ['nullable'],
            'description' => ['nullable'],
            'description_short' => ['nullable'],
            'content' => ['nullable'],
            'price' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
            'categories' => ['nullable', 'array'],
            'stages' => ['nullable', 'array'],
            'stages_title' => ['nullable'],
        ];
    }
}
