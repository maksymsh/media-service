<?php

namespace App\Http\Requests\Admin\Example;

use App\Http\Requests\Admin\BaseFormRequest;

class StoreExampleRequest extends BaseFormRequest
{
    /**
     * Determine if the example is authorized to make this request.
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
