<?php

use app\controller\HomeController;
use lib\Route;


Route::get("/",function(){
    echo "RUTA RAIZ";
});


Route::get("/Inicio",[HomeController::class,"inicio"]);
Route::get("/Contactar",[HomeController::class,"contactar"]);
Route::dispatch();

?>