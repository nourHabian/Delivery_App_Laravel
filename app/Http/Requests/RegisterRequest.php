<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'first_name'=>'required|string|max:50|',
            'last_name'=>'required|string|max:50|',
            'phone_number'=>'required|unique:users,phone_number|digits:10',
            'location'=>'required|string',
            'image_path'=>'nullable|string',
            'password'=>'required|confirmed|min:8'
        ];
    }
}
