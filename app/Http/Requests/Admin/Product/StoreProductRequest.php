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
            'name' => ['required'],
            'slug' => ['nullable'],
            'price' => ['nullable'],
            'description' => ['nullable'],
            'short_description' => ['nullable'],
        ];
    }
}
