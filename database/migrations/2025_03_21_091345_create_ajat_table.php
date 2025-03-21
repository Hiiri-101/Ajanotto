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
        Schema::create('tehtava', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tehtavaNimi');
            $table->integer('aika');
            $table->string('tiimi');
            $table->foreignId('task_id');
        });

        Schema::create('lopputulos', function (Blueprint $table) {
            $table->integer('loppuaika');
            $table->foreignId('task_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ajat');
    }
};