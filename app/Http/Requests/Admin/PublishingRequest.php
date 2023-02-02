<?php

namespace App\Http\Requests\Admin;

class PublishingRequest extends BaseFormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
            'model' => ['required'],
            'id' => ['required'],
            'published' => ['required', 'boolean'],
        ];
    }
}
