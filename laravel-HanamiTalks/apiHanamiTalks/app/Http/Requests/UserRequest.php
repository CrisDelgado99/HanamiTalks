<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password as PasswordRules;
use Illuminate\Validation\Rule;


class UserRequest extends FormRequest
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
        $userId = $this->route('id'); // Get the user ID from the route

        return [
            'username' => ['required', 'string', 'min:5', 'max:30', Rule::unique('users')->ignore($userId)],
            'nickname' => 'required|string|max:30|min:5',
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($userId)],
            'password' => ['sometimes', 'required', 'confirmed', PasswordRules::min(8)->letters()->numbers()], 
            'type' => 'required|string|max:20',
            'kanjiLvl' => 'required|integer|min:1',
            'grammarLvl' => 'required|integer|min:1',
            'vocabLvl' => 'required|integer|min:1',
            'image' => 'required|string|max:255'
        ];
    }

}