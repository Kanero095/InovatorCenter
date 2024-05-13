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
        Schema::create('innovation_lists', function (Blueprint $table) {
            $table->id();
            $table->string('DateCreated');
            $table->string('nameInnovation');
            $table->string('nameTeamInnovation');
            $table->text('descriptionInnovation');
            $table->text('imgInnovation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('innovation_lists');
    }
};
