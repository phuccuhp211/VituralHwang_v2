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
        Schema::create('work', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('possition', 25);
            $table->datetime('date');
        });

        Schema::create('arch', function (Blueprint $table) {
            $table->increments('id');
            $table->string('model', 25);
            $table->string('possition', 1);
            $table->datetime('date');
        });

        Schema::create('media', function (Blueprint $table) {
            $table->increments('id');
            $table->string('thumb', 100);
            $table->string('origin', 100);
            $table->string('page', 10);
            $table->integer('group');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('work');
        Schema::dropIfExists('arch');
        Schema::dropIfExists('media');
    }
};
