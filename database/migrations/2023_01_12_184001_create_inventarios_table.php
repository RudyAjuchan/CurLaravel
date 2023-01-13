<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('articulo_id')->nullable()->constrained('articulos');
            $table->decimal('compra',8,2)->default(0);
            $table->decimal('venta',8,2)->default(0);
            $table->decimal('cantidad',8,2)->default(0);
            $table->integer('tipo');
            $table->text('motivo')->nullable();
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
        Schema::dropIfExists('inventarios');
    }
}
