<?php

namespace App\Http\Requests\News;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Validator;

class UpdateRequest extends FormRequest
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
            'category_id' => ['required', 'integer', 'min:1',
                'exists:categories,id'],
            'title' => ['required', 'string', 'min:5', 'max:250'],
            'author' => ['required', 'string', 'min:2', 'max:50'],
            'image'  => ['nullable', 'image', 'mimes:png,jpg'],
            'status' => ['required', 'string', 'min:5', 'max:7'],
            'description' => ['nullable', 'string'],
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'Поле :attribute нужно заполнить'
        ];
    }

    public function attributes(): array
    {
        return [
            'category_id' => 'ID категории',
            'title' => 'Название',
            'status' => 'Статус',
            'author' => 'Автор',
            'description' => 'Описание',
        ];
    }
}
