<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::dropIfExists('grammar_uses');
        Schema::create('grammar_uses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('grammar_id');
            $table->foreign("grammar_id")->references("id")->on("grammars")->onDelete("cascade");
            $table->string("title", 40);
            $table->string("description", 200);
            $table->string("example", 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grammar_uses');
    }
};
