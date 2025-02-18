<?php include('config.php')?>
<!-- <?php include('./KEYS.php')?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoWorking</title>
</head>
<body>
    <?php
        $troca = "";
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $pageError = './src/Pages/404.php';
        if(isset($_GET['url']) == PAGE_USERS){
            $troca = PAGE_USERS;
        }else if(isset($_GET['url']) != PAGE_USERS && isset($_GET['url']) == PAGE_ADM){
            $troca = PAGE_ADM;
        }else{
            $troca = PAGE_MAIN;
        }

    ?>
    <!-- HEADER -->
    <h1><?php echo $troca?></h1>
    <!-- CONTENT -->
    <?php 
        if (file_exists('./'.$troca.$url.'.php')){
            include('./'.$troca.$url.'.php');
        }else{
            include($pageError);
        }
    ?>
    <a href="<?php echo INCLUDE_PATH.PAGE_USERS;?>dashboard.php">ir para user dashboard</a>
    <!-- FOOTER -->
</body>
</html>


