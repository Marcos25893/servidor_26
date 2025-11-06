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

                $_SESSION['incidencias'] = getIncidencias();

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



?>