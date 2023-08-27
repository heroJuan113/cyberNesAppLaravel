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
        Schema::create('sucursals', function (Blueprint $table) {
            $table->id();
            $table->String('idSucursal' , 180)->notNull();
            $table->String('nombre', 100)->notNull();
            $table->String('colonia',100);
            $table->String('calle' , 100)->notNull();
            $table->Float('numero',4)->notNull();
            $table->String('referencia' , 500)->notNull();
            $table->String('bandera')->notNull();
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
        Schema::dropIfExists('sucursals');
    }
};
