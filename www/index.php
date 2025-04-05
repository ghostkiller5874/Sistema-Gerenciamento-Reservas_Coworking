<?php include('config.php')?>
<!-- <?php include('./KEYS.php')?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <!-- CONFIGURAÇÕES -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- FONTES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet">

    <!-- ESTILIZAÇÃO -->
    <link rel="stylesheet" href="./src/styles/global.css">

    <title>CoWorking</title>
</head>
<body>
    <?php
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';      
    ?>
    
    <!-- CONTENT -->
    <?php 
        if (file_exists('./src/Pages/'.$url.'.php')){
            // retorna arquivo da pagina
            include('./src/Pages/'.$url.'.php');
        }else{
            // retorna pagina de erro 
            include "./src/Pages/404.php";
        }
    ?>


    <script defer src="./src/js/jquery.js"></script>
    <script defer src="./src/js/scripts.js"></script>
</body>
</html>


