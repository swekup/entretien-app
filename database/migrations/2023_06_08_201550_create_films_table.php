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
        Schema::create('films', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unique()->index();
            $table->boolean('adult');
            $table->string('backdrop_path');
            $table->string('title');
            $table->string('original_language')->index();
            $table->string('original_title');
            $table->text('overview');
            $table->string('poster_path');
            $table->string('media_type');
            $table->float('popularity');
            $table->date('release_date')->index();
            $table->boolean('video');
            $table->float('vote_average');
            $table->integer('vote_count');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
