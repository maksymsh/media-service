<?php

namespace App\Http\Requests\Admin\Product;

use App\Http\Requests\Admin\BaseFormRequest;

class StoreProductRequest extends BaseFormRequest
{
    /**
     * Determine if the product is authorized to make this request.
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
            'icon' => ['nullable'],
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
            'categories' => ['nullable', 'array'],
            'options' => ['nullable', 'array'],
        ];
    }
}
