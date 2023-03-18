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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome',150)->nullabel();
            $table->string('endereco',150)->nullabel();
            $table->string('email',150)->nullabel();
            $table->string('cpf',11)->nullabel();
            $table->string('telefone',15)->nullabel();
            $table->date('datanasc')->nullabel();
            $table->string('cep',8)->nullabel();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
