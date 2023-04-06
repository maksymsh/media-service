<?php

namespace App\Http\Requests\App;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackRequest extends FormRequest
{
    /**
     * Determine if the course is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'type' => ['nullable'],
            'id' => ['nullable'],
            'rating' => ['nullable'],
            'name' => ['required'],
            'email' => ['required'],
            'phone' => ['required'],
            'comment' => ['nullable'],
            'check' => ['required'],
        ];
    }
}
