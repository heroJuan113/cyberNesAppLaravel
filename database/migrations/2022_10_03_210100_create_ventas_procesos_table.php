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
        Schema::create('ventas_procesos', function (Blueprint $table) {
            $table->id();
            $table->String('idSucursal',180)->notNull();
            $table->String('idUsuario',70)->notNull();
            $table->String('idProducto',70);
            $table->String('idSession',250);
            $table->String('idServicio',70);
            $table->Float('cantidad',4)->notNull();
            $table->Float('precio',8)->notNull();
            $table->Float('tipoVenta',5)->notNull();
            $table->String('idProceso' ,70)->notNull();
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
        Schema::dropIfExists('ventas_procesos');
    }
};
