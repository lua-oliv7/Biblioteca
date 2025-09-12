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
        Schema::create('empréstimos', function (Blueprint $table) {
            $table->id();
            $table->datetime('data_emprestimo');
            $table->datetime('data_devolucao');
            $table->string('codigo_membro');
            $table->string('codigo_livro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empréstimos');
    }
};
