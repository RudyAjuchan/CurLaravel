<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCajaComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('caja_compras', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_caja')->nullable()->constrained('cajas');
            $table->foreignId('id_compra')->nullable()->constrained('compras');
            $table->decimal('monto',8,2)->default(0);
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
        Schema::dropIfExists('caja_compras');
    }
}
