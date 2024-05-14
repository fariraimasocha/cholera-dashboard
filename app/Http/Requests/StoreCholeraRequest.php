<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreCholeraRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'hospital' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'status' => ['required', 'string'],
            'province' => ['required', 'string'],
            'district' => ['required', 'string'],
            'city' => ['required', 'string'],
            'age' => ['required', 'string'],
        ];
    }
}
