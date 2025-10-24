<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego</title>

    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>



    <div class="card" style="width: 100em;">
        <h5 class="card-title text-center">Haga click en el dorso de la carta para pedir una carta.</h5>
        <div class="d-flex flex-row mb-3">
            <?php 

            if(isset($_REQUEST['suma'])){
                if($_REQUEST['suma']==7.5){
                    echo '<h1>Has ganado</h1>';
                    
                }elseif($_REQUEST['suma']>7.5){
                    echo '<h1>Has perdido</h1>';
                }
            }
            echo '<a class="p-2" href="controlador.php?accion=sacar"><img src="./cartas/dorso-rojo.svg" width="200px"></a>';
            
                if(isset($_SESSION['cartas'])){
                    foreach($_SESSION['cartas'] as $carta){
                        echo '<img class="p-2" src="./cartas/' . $carta . '.svg" alt="" width="200px">'; 
                        echo "<br>";
                    }
                }
                
            ?>
        </div>
        <div class="card-body">
            
            <a href="controlador.php?accion=reiniciar" class="btn btn-primary">Reiniciar</a>
        </div>
    </div>


    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>

</body>
</html>