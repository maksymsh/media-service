<?php

namespace App\Http\Requests\Admin\Category;

use App\Http\Requests\Admin\BaseFormRequest;

class StoreCategoryRequest extends BaseFormRequest
{
    /**
     * Determine if the category is authorized to make this request.
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
            'type' => ['nullable'],
            'top' => ['nullable'],
            'bottom' => ['nullable'],
            'home' => ['nullable'],
            'published' => ['nullable'],
            'name' => ['nullable'],
            'slug' => ['nullable'],
            'description' => ['nullable'],
            'description_short' => ['nullable'],
            'content' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
        ];
    }
}
