<?php


class homeController extends controller{



    public function index(){

      /* $fotos = new fotos();
       $dados['fotos'] = $fotos->getFotos();*/

        $dados = array();

        $this->loadTemplate('home', $dados);
    }

    public function sobre(){

        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }


}