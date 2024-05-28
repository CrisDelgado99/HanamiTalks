<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Grammar extends Model
{
    use HasFactory;
    protected $fillable = ["description", "topicTitle", "level"];

    protected $hidden = ["created_at", "updated_at"];

    public function grammar_uses():HasMany{
        return $this->hasMany(GrammarUse::class);
    }

    public function users(): BelongsToMany{
        return $this->belongsToMany(User::class, 'grammar_user', 'grammar_id', 'user_id');
    }
}
