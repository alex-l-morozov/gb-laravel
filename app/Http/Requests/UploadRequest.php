<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UploadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
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
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:3', 'max:25'],
            'phone' => ['nullable', 'string' ],
            'email' => ['nullable', 'email' ],
            'description' => ['required', 'string']
        ];
    }

    public function messages(): array
    {
        return FormRequest::messages();
    }

    public function attributes(): array
    {
        return [
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'E-mail',
            'description' => 'Комментарий',
        ];
    }
}
