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
        
        $url = isset($_GET['url']) ? $_GET['url'] : 'home';
        $pageError = './src/Pages/404.php';

        $troca = PAGE_MAIN;
        if(isset($_GET['url']) && $_GET['url'] == PAGE_USERS){
            $troca = PAGE_USERS;
        }else if(isset($_GET['url']) && $_GET['url'] == PAGE_ADM){
            $troca = PAGE_ADM;
        }
            
        

    ?>
    <!-- HEADER -->
    
    <!-- CONTENT -->
    <?php 
        if (file_exists('./'.$troca.$url.'.php')){
            // retorna arquivo da pagina
            include('./'.$troca.$url.'.php');
        }else{
            // retorna pagina de erro 
            include($pageError);
        }
    ?>
    <br>
    <a href="<?php echo INCLUDE_PATH.PAGE_USERS;?>dashboard">ir para user dashboard</a>
    <br>
    <a href="<?php echo INCLUDE_PATH.PAGE_ADM;?>dashboard">ir para painel dashboard</a>
    <!-- FOOTER -->
</body>
</html>


