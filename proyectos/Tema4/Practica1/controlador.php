<?php
    session_start();
    include_once ('modelo.php');

    if(isset($_REQUEST['accion'])){
        switch($_REQUEST['accion']){
            case 'login':   //Comprueba que el email le corresponde a esa contraseña, primero hay que descriptar la contraseña, 
                            // si coincide el email y la contraseña con la del tecnico te manda a dashboard.php si no te deja en el login
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
                break;

            case 'logout': //Cierra Sesión
                session_destroy();
                header("Location: login.php");
                break;

            case 'NuevoTecnico': //Comprueba que no exite el email, si no existe crea un nuevo tecnico y encripta la contraseña
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
                break;

            case 'filtrar': //Filtra las Incidencias por Estado, Tipo y Prioridad, si no se le pone nada filtrara por Todas por defecto
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
                break;

            case 'buscar': //Se le pasa un texto y pinta los titulos, descripciones o tipos que contengan ese texto
                $buscar = "%" . $_REQUEST['busqueda'] ."%";

                $_SESSION['incidencias'] = campoBusqueda($buscar, $_SESSION['email']);
                header("Location: dashboard.php");
                break;

            case 'delIncidencia': //Borra de la BBDD la incidencia con ese ID y guarda las incidencias en las sesion para que se actualice
                DeleteIncidenciaByID($_REQUEST['id_incidencia']);
                $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
                header("Location: dashboard.php");
                break;

            case 'editIncidencia'://Recoge lo nuevos valores de la incidencia y los actualiza en la BBDD
                editIncidencia($_REQUEST['id_incidencia'], $_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['tipo'], 
                $_REQUEST['estado'], $_REQUEST['prioridad']);
                $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
                header("Location: dashboard.php");
                break;

            case 'NuevaIncidencia': //Crea una nueva incidencia a partir de los datos recogidos del formulario
                insertarIncidencia($_REQUEST['titulo'], $_REQUEST['descripcion'], $_REQUEST['tipo'], $_REQUEST['prioridad'], $_SESSION['email']);
                $_SESSION['incidencias'] = getIncidencias($_SESSION['email']);
                header("Location: dashboard.php");
                break;
        }
    }



?>