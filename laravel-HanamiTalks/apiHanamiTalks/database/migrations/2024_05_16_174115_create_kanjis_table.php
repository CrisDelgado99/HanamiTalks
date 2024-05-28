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
        Schema::dropIfExists('kanjis');
        Schema::create('kanjis', function (Blueprint $table) {
            $table->id();
            $table->string("symbol", 10);
            $table->string("kunyomi", 30);
            $table->string("onyomi", 30);
            $table->string("translation", 30);
            $table->string("topicTitle", 20);
            $table->integer("level");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kanjis');
    }
};
