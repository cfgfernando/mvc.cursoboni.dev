<?php
require "environment.php";

    global $config;
    $config = array();
    if(ENVERONMENT == "development"){
        $config['dbname'] = 'cadastro_livro';
        $config['host']   = '127.0.0.1';
        $config['dbuser'] = 'root';
        $config['dbpass'] = 'root';
    }else{
        $config['dbname'] = 'cadastro_livro';
        $config['host']   = '127.0.0.1';
        $config['dbuser'] = 'root';
        $config['dbpass'] = 'root';
    }