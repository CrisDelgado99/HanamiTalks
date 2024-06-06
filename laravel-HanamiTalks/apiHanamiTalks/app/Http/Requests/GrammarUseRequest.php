<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GrammarUseRequest extends FormRequest
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
            "title" => "required|max:40|min:5",
            "description" => "required|max:200|min:5",
            "example" => "required|max:200|min:5",
            "grammar_id" => "required|numeric"
        ];
    }
}
