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
        Schema::create('inovasis', function (Blueprint $table) {
            $table->id();
            $table->string('nameInovasi');
            $table->text('imgLogo');
            $table->text('deskripsi');
            $table->text('imgTim');
            $table->string('web');
            $table->string('instagram');
            $table->string('facebook');
            $table->string('other');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inovasis');
    }
};
