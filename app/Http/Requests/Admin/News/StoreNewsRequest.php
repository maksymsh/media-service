<?php

namespace App\Http\Requests\Admin\News;

use App\Http\Requests\Admin\BaseFormRequest;

class StoreNewsRequest extends BaseFormRequest
{
    /**
     * Determine if the news is authorized to make this request.
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
            'title' => ['nullable'],
            'slug' => ['nullable'],
            'content' => ['nullable'],
            'published' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
        ];
    }
}
