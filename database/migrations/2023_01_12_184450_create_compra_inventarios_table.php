<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompraInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compra_inventarios', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_inventario')->nullable()->constrained('inventarios');
            $table->foreignId('id_compra')->nullable()->constrained('compras');
            $table->decimal('precio',8,2)->default(0);
            $table->decimal('cantidad',8,2)->default(0);
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
        Schema::dropIfExists('compra_inventarios');
    }
}
