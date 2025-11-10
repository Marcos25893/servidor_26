<?php
    session_start();
    include_once ('modelo.php');

    if(isset($_REQUEST['enviar'])){

        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        $password_hash = getPasswordByEmail($email);

        if($password_hash!=null){

            if(password_verify($password, $password_hash['password'])){

                $_SESSION['email'] = $email;

                $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);

                header("Location: dashboard.php");
            }else{
                header("Location: login.php");
            }
        }else{
            header("Location: login.php");

        }
    }

    if(isset($_REQUEST['crear'])){

        $existe = false;
        $correos = getEmails();
        foreach($correos as $correo){
            if($correo['email']==$_REQUEST['email']){
                $existe=true;
                break;
            }
        }

        if(!$existe){
            $password_encrypted = password_hash($_REQUEST['password'], PASSWORD_BCRYPT);

            insertarTecnico($_REQUEST['nombre'], $_REQUEST['email'], $password_encrypted);
            header("Location: login.php");
        }else{
            header("Location: register.php");
        }
    }

    if(isset($_REQUEST['filtrar'])){
        $estado;
        $tipo;
        $prioridad;

        if($_REQUEST['Estado']!="Estado" && $_REQUEST['Estado']!="Todas"){
            $estado = $_REQUEST['Estado'];
        }else{
            $estado = "%";
        }

        if($_REQUEST['Tipo']!="Tipo" && $_REQUEST['Tipo']!="Todas"){
            $tipo = $_REQUEST['Tipo'];
        }else{
            $tipo = "%";
        }

        if($_REQUEST['Prioridad']!="Prioridad" && $_REQUEST['Prioridad']!="Todas"){
            $prioridad = $_REQUEST['Prioridad'];
        }else{
            $prioridad = "%";
        }

        $_SESSION['incidencias'] = filtrarPorEnun($estado, $tipo, $prioridad, $_SESSION['email']);
        header("Location: dashboard.php");
    }

    if(isset($_REQUEST['buscar'])){

        $buscar = "%" . $_REQUEST['busqueda'] ."%";

        $_SESSION['incidencias'] = campoBusqueda($buscar, $_SESSION['email']);
        header("Location: dashboard.php");
    }

    if(isset($_REQUEST['nuevaIncidencia'])){
        insertarIncidencia($_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['tipo'], $_REQUEST['prioridad'], $_SESSION['email']);
        $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
        header("Location: dashboard.php");
    }

    if(isset($_REQUEST['editIncidencia'])){
        editIncidencia($_REQUEST['id_incidencia'], $_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['tipo'], 
        $_REQUEST['estado'], $_REQUEST['prioridad']);
        $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
        header("Location: dashboard.php");

    }

    if(isset($_REQUEST['accion'])){
        switch($_REQUEST['accion']){
            case 'logout':
                session_destroy();
                header("Location: login.php");
                break;

            case 'verIncidencia':
                $incidencia = getIncidenciaByID($_REQUEST['id'], $_SESSION['email']);

                header("Location: verIncidencia.php?id_incidencia=" . $incidencia['id_incidencia'] ."&titulo=" . $incidencia['titulo'] ."&descripcion=" . $incidencia['descripcion'] ."&tipo=" . $incidencia['tipo'] .
                "&estado=" . $incidencia['estado'] ."&prioridad=" . $incidencia['prioridad'] ."&id_tecnico=" . $incidencia['id_tecnico'] .
                "&fecha_creacion=" . $incidencia['fecha_creacion'] ."&fecha_actualizacion=" . $incidencia['fecha_actualizacion'] );
                break;

            case 'delIncidencia':
                DeleteIncidenciaByID($_REQUEST['id']);
                $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
                header("Location: dashboard.php");
                break;
        }
    }



?>