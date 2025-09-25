<?php

use app\controller\HomeController;
use lib\Route;


Route::get("/",function(){
    echo "RUTA RAIZ";
});

Route::get("/inicio/:flag",function($flag){
    // return ["tittle"=>"ejemplo"];
    return array("nombre"=>$flag);
});

Route::get("/Home",[HomeController::class,"index"]);
Route::dispatch();

?>