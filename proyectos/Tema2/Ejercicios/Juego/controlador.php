<?php
session_start();

    include_once('funciones.php');

    $baraja= array('c1', 'c2', 'c3', 'c4', 'c4', 'c5', 'c6', 'c7', 'c11', 'c12', 'c13', 'd1', 'd2', 'd3', 'd4', 'd5', 'd6', 'd7', 'd11', 'd12', 'd13'
    , 'p1', 'p2', 'p3', 'p4', 'p5', 'p6', 'p7', 'p11', 'p12', 'p13', 't1', 't2', 't3', 't4', 't5', 't6', 't7', 't11', 't12', 't13');

    if (!isset($_SESSION['cartas'])) {
        $_SESSION['cartas'] = array();
    }

    shuffle($baraja);

    if(isset($_REQUEST['accion'])){
        switch($_REQUEST['accion']){
            case 'sacar':

                $suma = sumarCartas($_SESSION['cartas']);
                if($suma<7.5){
                    array_push($_SESSION['cartas'], $baraja[0]);
                    unset($baraja[0]);
                    
                    $suma = sumarCartas($_SESSION['cartas']);
                    header ('Location: juego.php?suma=' . $suma .'');
                    
                }else{
                    header ('Location: juego.php?suma=' . $suma .'');
                }

                break;

            case 'reiniciar':

                session_destroy();
                header('Location: juego.php');
                break;
            
        }
    }


?>