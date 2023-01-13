<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('barra')->nullable();
            $table->foreignId('medida_id')->nullable()->constrained('medidas');            
            $table->foreignId('marca_id')->nullable()->constrained('marcas');
            $table->foreignId('categoria_id')->nullable()->constrained('categorias');
            $table->decimal('compra',8,2)->default(0);
            $table->decimal('venta',8,2)->default(0);
            $table->decimal('stock_minimo',8,2)->default(0);
            $table->integer('estado')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos');
    }
}
