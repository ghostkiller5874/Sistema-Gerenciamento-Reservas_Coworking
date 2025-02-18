<?php

// $autoload = function($class){
//     if('./src/Classes/'.$class.'.php'){
//         require('./src/Classes/'.$class.'.php');
//     }
//  }

// spl_autoload_register($autoload);

define('MAIN','http://localhost:8080/');

// Constantes do Banco de Dados
define('HOST','localhost');
define('DATABASE','gestao_coworking');
define('USER','user');
define('PASSWORD','root');

// route main
define('INCLUDE_PATH',MAIN);

// Constantes route pages
define('PAGE_USERS','./src/Pages/Users/');
define('PAGE_ADM','./src/Pages/Painel_ADM/');
define('PAGE_MAIN','./src/Pages/');