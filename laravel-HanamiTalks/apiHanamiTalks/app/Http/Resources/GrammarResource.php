<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class GrammarResource extends JsonResource
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
            "topicTitle" => $this->topicTitle,
            "description" => $this->description,
            "level" => $this->level,
            "grammar_uses" => $this->grammar_uses
        ];
    }
}
