<?php

namespace App\Http\Requests\Admin\MenuItem;

use App\Http\Requests\Admin\BaseFormRequest;

class UpdateMenuItemRequest extends BaseFormRequest
{
    /**
     * Determine if the menu_item is authorized to make this request.
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
