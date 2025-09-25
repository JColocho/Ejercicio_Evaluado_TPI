<?php

namespace app\controller;
class HomeController {
    public function contactar() {
        return $this->view("ContactarView");
    }
    public function inicio() {
        return $this->view("InicioView");
    }


    public function view($vista){
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