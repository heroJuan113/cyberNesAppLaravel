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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('idEmpleado',70)->notNull()->unique();
            $table->string('nombre',100)->notNull();
            $table->string('curp',18)->notNull()->unique();
            $table->string('colonia',100)->notNull();
            $table->string('ciudad',100)->notNull();
            $table->Float('numero',4);
            $table->Float('telefono',12)->notNull()->unique();
            $table->Float('codigoPostal',8)->notNull();
            $table->string('estado',100)->notNull();
            $table->string('foto');
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
        Schema::dropIfExists('empleados');
    }
};
