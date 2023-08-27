<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controllers;
 class pruebaController extends Controller{
    public function prueba(){
        return "estoy dentro de  prueba Controller y recibi este parametro";
    }
    public function prueba1($param){
        return "estoy dentro de  prueba Controller y recibi este parametro" .$param;
    }
}