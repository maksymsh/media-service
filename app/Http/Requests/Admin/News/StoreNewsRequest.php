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
            //
        ];
    }
}
