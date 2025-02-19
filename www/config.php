<?php
session_start();
date_default_timezone_set('America/Sao_Paulo');

// $autoload = function($class){
//     if('./src/Classes/'.$class.'.php'){
//         require('./src/Classes/'.$class.'.php');
//     }
//  }

// spl_autoload_register($autoload);


// Constantes do Banco de Dados
define('HOST','localhost');
define('DATABASE','gestao_coworking');
define('USER','user');
define('PASSWORD','root');

// route main
define('MAIN','http://localhost:8080/');
define('INCLUDE_PATH',MAIN);

// Constantes route pages
define('PAGE_USERS',str_replace('./src/Pages/Users/','Users','Users/'));
define('PAGE_ADM',str_replace('./src/Pages/Painel_ADM/','Painel_ADM','Painel_ADM/'));
define('PAGE_MAIN','./src/Pages/');