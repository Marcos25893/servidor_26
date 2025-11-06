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

function getIncidencias(){
    $conectar = conectarBD();

    $stmt = $conectar->prepare("SELECT * FROM incidencia");
    $stmt -> execute();

    $incidencias = $stmt-> fetchAll(PDO::FETCH_ASSOC); 

    return $incidencias;
}


?>