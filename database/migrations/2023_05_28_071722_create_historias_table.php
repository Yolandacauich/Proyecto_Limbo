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
        Schema::create('historias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_historia');
            $table->text('historia');
            $table->string('popularidad');
            $table->binary('image')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->timestamps();

            $table->foreignId('id_categoria')
            ->constrained('categorias')
            ->cascadeOnUpdate();

            $table->foreignId('id_ubicacion')
            ->constrained('ubicaciones')
            ->cascadeOnUpdate();

            $table->foreignId('id_user')
            ->constrained('users')
            ->cascadeOnUpdate();

            $table->foreignId('id_comentario')
            ->constrained('comentarios')
            ->cascadeOnUpdate();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('historias');
    }
};
