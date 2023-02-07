<?php

namespace App\Http\Requests\Admin\Course;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateCourseRequest extends BaseFormRequest
{
    /**
     * Determine if the course is authorized to make this request.
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
            'name' => ['nullable'],
            'slug' => ['nullable'],
            'description' => ['nullable'],
            'layout_id' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
        ];
    }
}
