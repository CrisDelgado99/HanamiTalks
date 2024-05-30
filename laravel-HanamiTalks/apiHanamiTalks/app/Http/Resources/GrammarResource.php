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
            //TODO sé consistente con el nombrado de las variables, sobre todo esta que es la que
            //expones para ser consistentes con topicTitle, deberías llamarla grammarUses,
            // si prefieres usar guión bajo cambia la de topicTitle por topic_title.
            //Me da igual una manera u otra, pero sé siempre consistente. También deberías cambiarlo en la clase, para seguir con la misma coherencia.
            "grammar_uses" => $this->grammar_uses
        ];
    }
}
