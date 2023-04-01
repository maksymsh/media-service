<?php

namespace App\Http\Requests\Admin\Page;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdatePageRequest extends BaseFormRequest
{
    /**
     * Determine if the page is authorized to make this request.
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
            'code' => ['nullable'],
            'title' => ['nullable'],
            'slug' => ['nullable'],
            'url' => ['nullable'],
            'description' => ['nullable'],
            'published' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
        ];
    }
}
