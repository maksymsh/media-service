<?php

namespace App\Http\Requests\Admin\Study;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateStudyRequest extends BaseFormRequest
{
    /**
     * Determine if the study is authorized to make this request.
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
            //
        ];
    }
}
