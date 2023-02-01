<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'firstname' => ['required'],
            'lastname' => ['required'],
            'username' => ['required'],
            'email' => ['required', 'email'],
            'roles' => ['nullable', 'array'],
        ];
    }

    /**
     * Fix for multiple file upload
     *
     * @return array
     */
    public function allFiles()
    {
        $files = $this->files->all();

        return $this->convertedFiles = $this->convertUploadedFiles($files);
    }
}
