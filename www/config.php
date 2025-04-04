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
define('HOST','db');
define('DATABASE','gestao_coworking');
define('USER','user');
define('PASSWORD','root');

// route main
define('INCLUDE_PATH','http://localhost:8080/');