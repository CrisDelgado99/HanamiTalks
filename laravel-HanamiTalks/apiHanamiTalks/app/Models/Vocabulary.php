<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vocabulary extends Model
{
    use HasFactory;

    protected $fillable = ["word", "kana", "romaji", "translation", "topicTitle", "level"];

    protected $hidden = ["created_at", "updated_at"];

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'user_vocabulary', 'vocabulary_id', 'user_id');
    }
}
