<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoriRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "name"  => ["required", "string", "min:3", "max:255"]
        ];
    }

    public function attributes(): array
    {
        return [
            "name"  => "Nama"
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'       => ':attribute wajib diisi.',
            'name.min'            => ':attribute minimal terdiri dari :min karakter.',
            'name.max'            => ':attribute maksimal terdiri dari :max karakter.',
        ];
    }
}
