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
            'top' => ['nullable'],
            'bottom' => ['nullable'],
            'published' => ['nullable'],
            'name' => ['nullable'],
            'slug' => ['nullable'],
            'description' => ['nullable'],
            'description_short' => ['nullable'],
            'detail' => ['nullable'],
            'certificate_text' => ['nullable'],
            'content' => ['nullable'],
            'seo_h1' => ['nullable'],
            'seo_title' => ['nullable'],
            'seo_description' => ['nullable'],
            'seo_keywords' => ['nullable'],
            'program' => ['nullable', 'array'],
            'program_file' => ['nullable', 'file'],
        ];
    }
}
