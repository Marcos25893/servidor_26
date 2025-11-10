<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="./css/fontawesome.css">
    <link href="./assets/css/solid.css" rel="stylesheet" />

</head>
<body>
    
    <div class="d-flex justify-content-between bg-primary" style="width: 100vw; height: 10vh;">
            <div class="ps-2">
                <img src="./img/logo.png" alt="" width="100vw">
            </div>

            <div class="pt-3">
                <h1>TecnoAssist</h1>
            </div>

            <div class="dropdown pe-2 pt-4">
                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <?= $_SESSION['email'];?>
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="controlador.php?accion=logout">Cerrar Sesión</a></li>
                </ul>
            </div>

    </div>