<?php

function conectarBD(){
    try {
        $dsn = "mysql:host=mariadb:3306;dbname=gestion_incidencias";
        $conectar = new PDO($dsn, "usuario", "usuario");
        $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e){
        echo $e->getMessage();
    }

    return $conectar;
}

function getPasswordByEmail($email){
    $conectar = conectarBD();

    $stmt = $conectar->prepare("SELECT password FROM tecnico WHERE email=:email");
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $contrasena = $stmt -> fetch();

    if($contrasena!=false){
        return $contrasena;
    }else{
        return null;
    }

}

function getEmails(){
    $conectar = conectarBD();

    $stmt = $conectar->prepare("SELECT email FROM tecnico");
    $stmt -> execute();
    $email = $stmt->fetchAll(PDO::FETCH_ASSOC); 
    return $email;
}

function insertarTecnico($name, $email, $password){
    $conectar = conectarBD();

    $stmt = $conectar->prepare("INSERT INTO tecnico (nombre, email, password, fecha_registro) VALUES (:nombre, :email, :password, NOW())");
    $stmt -> bindParam(":nombre", $name);
    $stmt -> bindParam(":email", $email);
    $stmt -> bindParam(":password", $password);
    $stmt -> execute();
}

function getIdTecnico($email){
    $conectar = conectarBD();

    $stmt = $conectar->prepare("SELECT id_tecnico FROM tecnico WHERE email=:email");
    $stmt -> bindParam(":email", $email);
    $stmt -> execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if($resultado) {
        $id_tecnico = $resultado['id_tecnico'];
    } else {
        $id_tecnico = null;
    }

    return $id_tecnico;
}

function getIncidencias($email){
    $conectar = conectarBD();
    $id = getIdTecnico($email);

    $stmt = $conectar->prepare("SELECT * FROM incidencia WHERE id_tecnico=:id");
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $incidencias = $stmt-> fetchAll(PDO::FETCH_ASSOC); 

    return $incidencias;
}

function filtrarPorEnun($estado, $tipo, $prioridad, $email){
    $conectar = conectarBD();
    $id = getIdTecnico($email);

    $stmt = $conectar->prepare("SELECT * FROM incidencia WHERE estado LIKE :estado AND tipo LIKE :tipo AND prioridad LIKE :prioridad AND id_tecnico=:id");
    $stmt -> bindParam(":estado", $estado);
    $stmt -> bindParam(":tipo", $tipo);
    $stmt -> bindParam(":prioridad", $prioridad);
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $incidencias = $stmt-> fetchAll(PDO::FETCH_ASSOC); 

    return $incidencias;
}

function campoBusqueda($buscar, $email){
    $conectar = conectarBD();
    $id = getIdTecnico($email);

    $stmt = $conectar -> prepare("SELECT * FROM incidencia WHERE titulo LIKE :buscar OR descripcion LIKE :buscar OR tipo LIKE :buscar AND id_tecnico=:id");
    $stmt -> bindParam(":buscar", $buscar);
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();

    $incidencias = $stmt-> fetchAll(PDO::FETCH_ASSOC); 

    return $incidencias;
}

function insertarIncidencia($titulo, $descripcion, $tipo, $prioridad, $email){
    $conectar = conectarBD();
    $estado = "Pendiente";
    $id = getIdTecnico($email);

    $stmt = $conectar -> prepare("INSERT INTO incidencia (titulo, descripcion, tipo, estado, prioridad, id_tecnico, fecha_creacion)
    VALUES(:titulo, :descripcion, :tipo, :estado, :prioridad, :id_tecnico, NOW())");
    $stmt -> bindParam(":titulo", $titulo);
    $stmt -> bindParam(":descripcion", $descripcion);
    $stmt -> bindParam(":tipo", $tipo);
    $stmt -> bindParam(":estado", $estado);
    $stmt -> bindParam(":prioridad", $prioridad);
    $stmt -> bindParam(":id_tecnico", $id);
    $stmt -> execute();

}

function getIncidenciaByID($id, $email){
    $conectar = conectarBD();
    $tecnico = getIdTecnico($email);

    $stmt = $conectar -> prepare("SELECT * FROM incidencia WHERE id_incidencia=:id AND id_tecnico=:id_tecnico");
    $stmt -> bindParam(":id", $id);
    $stmt -> bindParam(":id_tecnico", $tecnico);
    $stmt -> execute();

    $incidencia = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$incidencia) {
        $incidencia = null;
    }

    return $incidencia;
}

function DeleteIncidenciaByID($id){
    $conectar = conectarBD();

    $stmt = $conectar -> prepare("DELETE FROM incidencia WHERE id_incidencia=:id");
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();
}

function editIncidencia($id, $titulo, $descripcion, $tipo, $estado, $prioridad){
    $conectar = conectarBD();

    $stmt = $conectar -> prepare("UPDATE incidencia SET titulo=:titulo, descripcion=:descripcion, tipo=:tipo, estado=:estado, prioridad=:prioridad, 
    fecha_actualizacion=NOW() WHERE id_incidencia=:id");
    $stmt -> bindParam(":titulo", $titulo);
    $stmt -> bindParam(":descripcion", $descripcion);
    $stmt -> bindParam(":tipo", $tipo);
    $stmt -> bindParam(":estado", $estado);
    $stmt -> bindParam(":prioridad", $prioridad);
    $stmt -> bindParam(":id", $id);
    $stmt -> execute();
}
?>