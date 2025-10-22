<?php
    #Todas las acciones get y post de la aplicación.

    session_start();

    if(isset($_REQUEST["login"])){

        $pass=strlen($_REQUEST['password']);
        $mayuscula=strtolower($_REQUEST['password']);

        if(($pass<=8) || ($_REQUEST['password']==$mayuscula)){
            header("Location: login.php");
            
        }else{

            $_SESSION['usuario']=$_REQUEST['email'];

            $_SESSION['proyectos']=array(
                array("id" => "0001", "name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "salary" => "$320,800"),
                array("id" => "0002", "name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "salary" => "$320,800"),
                array("id" => "0003", "name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "salary" => "$320,800"),
                array("id" => "0004", "name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "salary" => "$320,800")
            );

            header("Location: proyectos.php");
        }
    }

    if(isser($_REQUEST("nuevoProyecto"))){
        $proyecto = array("id" => $_REQUEST["id"], "name"=> $_REQUEST["nombre"], "position"=> $_REQUEST["posicion"], "office"=> $_REQUEST["oficina"],
         "age"=> $_REQUEST["edad"], "salary"=> $_REQUEST["salario"] );
        array_push($_SESSION['proyectos'], $proyecto);

        header("Location: proyectos.php");
    }

    