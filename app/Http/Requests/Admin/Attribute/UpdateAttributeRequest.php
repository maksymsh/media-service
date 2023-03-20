<?php

namespace App\Http\Requests\Admin\Attribute;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateAttributeRequest extends BaseFormRequest
{
    /**
     * Determine if the attribute is authorized to make this request.
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
            'name' => 'required',
        ];
    }
}
