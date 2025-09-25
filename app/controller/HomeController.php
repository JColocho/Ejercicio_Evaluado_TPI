<?php

namespace app\controller;
class HomeController {
    // 47:50
    public function index() {
        // echo "Ejemplo controlador";
        return $this->view("HomeView",['tittle'=>'Ejemplo de vista',
                                                    "mensaje"=> "valor de mensaje"]);
    }

    public function view($vista,$data=[]){
        //require_once("../app/views/HomeView.php");
        extract($data); //apartir de un arreglo asosiativo genera variables

        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
        }
        return "hola desde la pagina Home";
    }


}

?>