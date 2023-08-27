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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('idProducto',70)->notNull()->unique();
            $table->string('clave',70)->notNull()->unique();
            $table->string('seccion',2)->notNull();
            $table->string('marca',100)->notNull();
            $table->string('linea',100)->notNull();
            $table->string('serie',100)->notNull();
            $table->string('descripcion',1000)->notNull();
            $table->string('garantia',4);
            $table->string('idProveedor',80)->notNull();
            $table->string('unidadMedida',50)->notNull();
            $table->Float('bandera',5)->notNull();
            $table->Float('iva',5)->notNull();
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
        Schema::dropIfExists('productos');
    }
};
