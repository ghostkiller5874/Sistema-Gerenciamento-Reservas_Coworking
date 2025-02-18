<style>

    .error-404 h2{
        
        text-align: center;
        color: #444;
        font-weight: 300;
    }

    .error-404 p{
        margin-top: 8px;
        text-align: center;
        font-size: 16px;
        color: #444;
        font-weight: 300;
    }

    .error-404 a{
        color: #444;
    }

    .wraper-404{
        transform: translate(-50%,-50%);
        -ms-transform: translate(-50%,-50%);
        width: 100%;
        left: 50%;
        text-align: center;
        position: absolute;
        top: 50%;
    }

    footer.fixed{
        position: fixed;
        bottom: 0;
        width: 100%;
    }
</style>

<div class="error-404">
    <div class="center">
        <div class="wraper-404">
            <h2><i class="fa fa-times" style="padding: 0 10px;"></i> Pagina Não Encontrada!</h2>
            <p>Deseja retornar para a <a href="<?php echo INCLUDE_PATH?>">página inicial</a>?</p> 
        </div>
        
    </div>
</div>