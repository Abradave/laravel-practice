<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePersonRequest extends FormRequest
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
        //validációk:
        return [
            "name" => "required|string|max:100",
            "email" => "required|email|max:200|unique:people,email",
            "address" => "required|string|max:200",
            "phone_number" => "required|string|max:20",
            "birth_date" => "required|date|before:tomorrow",
        ];
    }
}
