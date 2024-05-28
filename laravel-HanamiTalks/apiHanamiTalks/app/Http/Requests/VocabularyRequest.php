<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VocabularyRequest extends FormRequest
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
            "word" => "required|max:30",
            "kana" => "required|max:30",
            "romaji" => "required|max:30",
            "translation" => "required|max:30",
            "topicTitle" => "required|max:20",
            "level" => "required"
        ];
    }
}
