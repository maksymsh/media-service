<?php

namespace App\Http\Requests\Admin\Good;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateGoodRequest extends BaseFormRequest
{
    /**
     * Determine if the good is authorized to make this request.
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
            'published' => ['nullable'],
            'name' => ['nullable'],
            'slug' => ['nullable'],
            'description' => ['nullable'],
            'description_short' => ['nullable'],
            'content' => ['nullable'],
            'price' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
            'attributes' => ['nullable', 'array'],
            'categories' => ['nullable', 'array'],
        ];
    }
}
