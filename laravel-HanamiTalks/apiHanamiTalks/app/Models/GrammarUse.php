<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class GrammarUse extends Model
{
    use HasFactory;
    protected $fillable = ["grammar_id", "title", "description", "example"];

    protected $hidden = ["created_at", "updated_at"];

    public function grammars():BelongsTo{
        return $this->belongsTo(Grammar::class, 'grammar_id', 'id');
    }
}
