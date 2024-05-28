<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VocabularyResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "word" => $this->word,
            "kana" => $this->kana,
            "romaji" => $this->romaji,
            "translation" => $this->translation,
            "topicTitle" => $this->topicTitle,
            "level" => $this->level,
        ];
    }
}
