<?php

namespace App\Http\Resources;

//TODO elimina el código innecesario.
use App\Http\Requests\KanjiRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class KanjiResource extends JsonResource
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
            "symbol" => $this->symbol,
            "kunyomi" => $this->kunyomi,
            "onyomi" => $this->onyomi,
            "translation" => $this->translation,
            "topicTitle" => $this->topicTitle,
            "level" => $this->level,
        ];
    }
}
