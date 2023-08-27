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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('idUsuario',70)->notNull()->unique();
            $table->string('idEmpleado',70)->notNULL()->unique();
            $table->string('usuario',100)->notNull()->unique();
            $table->string('pass',32)->notNull();
            $table->float('tipoUsuario',2)->notNull();
            $table->float('bandera',2)->notNull()->unique();
            $table->float('usuarioPhone',10)->notNull();
            $table->string('idSession',250)->notNull()->unique();
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
        Schema::dropIfExists('usuarios');
    }
};
