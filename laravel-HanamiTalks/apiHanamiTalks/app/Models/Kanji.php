<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kanji extends Model
{
    use HasFactory;

    protected $fillable = ["symbol", "kunyomi", "onyomi", "translation", "topicTitle", "level"];

    protected $hidden = ["created_at", "updated_at"];

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'kanji_user', 'kanji_id', 'user_id');
    }

}
