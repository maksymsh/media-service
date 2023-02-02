<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class BaseFormRequest extends FormRequest
{
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
