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
                array("name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "start_date" => "2011/04/25", "salary" => "$320,800"),
                array("name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "start_date" => "2011/04/25", "salary" => "$320,800"),
                array("name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "start_date" => "2011/04/25", "salary" => "$320,800"),
                array("name" => "Tiger Nixon", "position" => "System Architect", "office" => "Edinburgh", "age" => 61, "start_date" => "2011/04/25", "salary" => "$320,800")
            );

            header("Location: proyectos.php");
        }
    }