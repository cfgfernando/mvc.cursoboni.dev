<?php


class homeController extends controller{

    public function __construct() {
        parent::__construct();
    }

    public function index(){



        $dados = array();

        $this->loadTemplate('home', $dados);
    }

    public function sobre(){

        $dados = array();
        $this->loadTemplate('sobre', $dados);
    }


}