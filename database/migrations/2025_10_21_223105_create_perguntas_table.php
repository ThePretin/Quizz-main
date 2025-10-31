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
        Schema::create('perguntas', function (Blueprint $table) {
            $table->id();
            $table->string('texto');
            $table->string('opcao_a');
            $table->string('opcao_b');
            $table->string('opcao_c');
            $table->string('opcao_d');
            $table->string('resposta_correta');
            $table->string('imagem')->nullable();
            $table->integer('pontos')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perguntas');
    }
};
