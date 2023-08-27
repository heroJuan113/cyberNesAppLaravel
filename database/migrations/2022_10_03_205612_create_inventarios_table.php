<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
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
            $table->String('idSucursal',180);
            $table->String('idSession',250);
            $table->String('clave',70);
            $table->String('tipo',10);
            $table->String('costo',10);
            $table->Float('existencia',10);
            $table->Float('gastos',10);
            $table->String('factura',10);
            $table->Float('utilidad',10);
            $table->Float('precioVenta',10);
            $table->String('idProducto',70);
            $table->Float('stockMaximo',11);
            $table->Float('stockMinimo',11);
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
};
