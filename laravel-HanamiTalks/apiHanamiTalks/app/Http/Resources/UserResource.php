<?php

namespace App\Http\Resources;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'username' => $this->username,
            'nickname' => $this->nickname,
            'email' => $this->email,
            'type' => $this->type,
            'kanjiLvl' => $this->kanjiLvl,
            'grammarLvl' => $this->grammarLvl,
            'vocabLvl' => $this->vocabLvl,
            'image' => $this->image,
            'kanjis' => $this->kanjis,
            'vocabularies' => $this->vocabularies,
            'grammars' => $this->grammars,
        ];
    }
}
