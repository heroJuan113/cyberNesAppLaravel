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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('idProveedor',70)->notNull()->unique();
            $table->Float('numero',5)->notNull();
            $table->string('nombre',100)->notNull()->unique();
            $table->string('municipio',250)->notNull();
            $table->string('calle',100)->notNull();
            $table->Float('numeroDomicilio',6)->notNull();
            $table->string('telefono',10)->notNull()->unique();
            $table->string('correo',100)->notNull()->unique();
            $table->string('rfc',11)->notNull()->unique();
            $table->Float('bandera',5)->notNull();
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
        Schema::dropIfExists('proveedores');
    }
};
