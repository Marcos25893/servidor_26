<?php
    #Todas las acciones get y post de la aplicación.

    session_start();

    if(isset($_REQUEST["login"])){

        $pass=strlen($_REQUEST['password']);
        $mayuscula=strtolower($_REQUEST['password']);

        //Comprueba que la contraseña sea mayor a 8 dígitos y que tenga al menos una mayuscula, si no la tiene te devuelve al login
        //Si la contraseña cumple los requisitos se le guarda en la sesion del usuario su emaily se carga el array de proyectos
        //Y te dirige a proyectos.php
        if(($pass<=8) || ($_REQUEST['password']==$mayuscula)){
            header("Location: login.php");
            
        }else{

            $_SESSION['usuario']=$_REQUEST['email'];

            $_SESSION['proyectos']=array(
            array("id"=>"1","nombre"=>"Sistema de Inventario","fechaInicio"=>"2025-09-01","fechaFinPrevista"=>"2026-03-01","diasTranscurridos"=>"45","porcentajeCompletado"=>"25","importancia"=>"4"),
            array("id"=>"2","nombre"=>"Portal de Empleados","fechaInicio"=>"2025-07-01","fechaFinPrevista"=>"2025-12-31","diasTranscurridos"=>"120","porcentajeCompletado"=>"50","importancia"=>"5"),
            array("id"=>"3","nombre"=>"App de Reservas","fechaInicio"=>"2025-04-01","fechaFinPrevista"=>"2025-10-01","diasTranscurridos"=>"180","porcentajeCompletado"=>"75","importancia"=>"3"),
            array("id"=>"4","nombre"=>"Tienda Online","fechaInicio"=>"2024-01-10","fechaFinPrevista"=>"2024-06-30","diasTranscurridos"=>"172","porcentajeCompletado"=>"100","importancia"=>"4")
        );

            $_SESSION['id'] = count($_SESSION['proyectos']);

            header("Location: proyectos.php");
        }
    }

    
    //Crea un nuevo Proyecto, a partir de los datos recogidos en el modal
    if(isset($_REQUEST["nuevoProyecto"])){
        
        
        $_SESSION['id']++;

        $proyecto = array("id" => $_SESSION['id'], "nombre"=> $_REQUEST["nombre"], "fechaInicio"=> $_REQUEST["fechaInicio"],"fechaFinPrevista"=>$_REQUEST["fechaFinPrevista"],
        "diasTranscurridos"=> $_REQUEST["diasTranscurridos"], "porcentajeCompletado"=> $_REQUEST["porcentajeCompletado"], "importancia"=> $_REQUEST["importancia"]);
        array_push($_SESSION['proyectos'], $proyecto);

        header("Location: proyectos.php");
    }

    //Borra un proyecto a partir de un id que se le pasa
    if(isset($_REQUEST['eliminarId'])){

        $posicion=0;
        $eliminar=0;
        foreach($_SESSION['proyectos'] as $proyecto){
            if(strcmp($proyecto['id'], $_REQUEST['id'])==0){
                $eliminar=$posicion;
            }
            $posicion++;
        }

        unset($_SESSION['proyectos'][$eliminar]);
        $_SESSION['proyectos']= array_values($_SESSION['proyectos']);

        header("Location: proyectos.php");
    }

    //Borra todos los proyectos, dejando el array vacio
    if(isset($_REQUEST['eliminarTodo'])){
        $_SESSION['proyectos']= [];

        header("Location: proyectos.php");
    }

    if(isset($_REQUEST['accion'])){
        switch($_REQUEST['accion']){

            //Salir de la sesión
            case 'logout':
                session_destroy();
                header("Location: login.php");
                break;

            //Borrar Proyecto teniendo la posición
            case 'delProyecto':
                unset($_SESSION['proyectos'][$_REQUEST['posicion']]);
                $_SESSION['proyectos']= array_values($_SESSION['proyectos']);

                header("Location: proyectos.php");
                break;

            //Borrar Proyecto teniendo el ID
            case 'delProyectoId':
                $posicion=0;

                foreach($_SESSION['proyectos'] as $proyecto){
                    if(strcmp($proyecto['id'], $_REQUEST['id'])==0){
                        unset($_SESSION['proyectos'][$posicion]);
                        break;
                    }
                    $posicion++;
                }
                $_SESSION['proyectos']= array_values($_SESSION['proyectos']);

                header("Location: proyectos.php");
                break;

            //A partir del id del proyecto sacas los demás valores y se los pasas a verProyecto.php
            case 'verProyecto':

                foreach($_SESSION['proyectos'] as $proyecto){
                    if(strcmp($proyecto['id'], $_REQUEST['id'])==0){
                        $nombre = $proyecto['nombre'];
                        $fechaInicio = $proyecto['fechaInicio'];
                        $fechaFinPrevista = $proyecto['fechaFinPrevista'];
                        $diasTranscurridos = $proyecto['diasTranscurridos'];
                        $porcentajeCompletado = $proyecto['porcentajeCompletado'];
                        $importancia = $proyecto['importancia'];
                    }
                }

                header("Location: verProyecto.php?id=" . $_REQUEST['id'] . "&nombre=" . $nombre . "&fechaInicio=" . $fechaInicio . "&fechaFinPrevista=" . $fechaFinPrevista .
                "&diasTranscurridos=" . $diasTranscurridos . "&porcentajeCompletado=" . $porcentajeCompletado . "&importancia=" . $importancia);
                break;

            default: 
                break;
        }   

    }

    