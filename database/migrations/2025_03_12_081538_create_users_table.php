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
        Schema::create('kayttajat', function (Blueprint $table) {
            $table->id();
            $table->string('nimi');
            $table->string('tunnus');
            $table->char('remember_token',
                          length: 10);
            $table->string('rooli')
                   ->nullable($value = true)
                   ->default(NULL);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};