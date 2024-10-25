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
        Schema::create(table: 'subcategorias', callback: function(Blueprint $table):void{
            $table->id();
            $table->unsignedBigInteger(column: 'id_c');
            $table->string('nombre');  
            $table->timestamps();

            
            $table->foreign('id_c')->references('id')->on('categorias');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subcategorias');
    }
};
