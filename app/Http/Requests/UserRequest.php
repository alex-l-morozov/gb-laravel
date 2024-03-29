<?php

declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UserRequest extends FormRequest
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
            'name'       => ['required', 'string'],
            'email'       => ['required', 'email'],
            'is_admin' => ['request', 'boolean'],
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
            'email' => 'E-mail',
            'is_admin' => 'Администратор'
        ];
    }
}
