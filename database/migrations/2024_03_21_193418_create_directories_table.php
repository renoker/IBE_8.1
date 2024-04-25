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
        Schema::create('directories', function (Blueprint $table) {
            $table->id();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->unsignedBigInteger('categorie_id')->nullable();
            $table->string('logo_servicio')->nullable();
            $table->string('image');
            $table->string('model');
            $table->string('name_es');
            $table->string('fabricacion_es');
            $table->string('capacidad_es');
            $table->string('componentes_es');
            $table->text('objetivo_es');
            $table->string('name_en');
            $table->string('fabricacion_en');
            $table->string('capacidad_en');
            $table->string('componentes_en');
            $table->text('objetivo_en');
            $table->integer('order');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('directories');
    }
};
