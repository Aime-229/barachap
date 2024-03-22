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
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('nomemployeur');
            $table->string('prenomemployeur');
            $table->string('numero');
            $table->string('lieu');
            $table->string('salaire');
            $table->boolean('statut')->default(0);
            $table->foreignId('employee_id')->constrained();
            $table->foreignId('activite_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
