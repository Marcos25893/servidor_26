<?php

if (isset($_REQUEST['accion'])) {
    echo "Botón pulsado " . $_REQUEST['accion'] . "<br>";
}

if (isset($_REQUEST['edad'])) {
    echo "Edad: " . $_REQUEST['edad'] . "<br>";
}

if (isset($_REQUEST['fecha'])) {
    echo "Fecha: " . $_REQUEST['fecha'] . "<br>";
}

if (isset($_REQUEST['hora'])) {
    echo "Hora: " . $_REQUEST['hora'] . "<br>";
}

if (isset($_REQUEST['deporte'])) {
    echo "Deporte: " . $_REQUEST['deporte'] . "<br>";
}

if (isset($_REQUEST['notificaciones'])) {
    echo "Notificaciones: ";
    foreach ($_REQUEST['notificaciones'] as $notif) {
        echo $notif . " ";
    }
    echo "<br>";
}

if (isset($_REQUEST['movil'])) {
    echo "Móvil: " . $_REQUEST['movil'] . "<br>";
}

if (isset($_REQUEST['paises'])) {
    echo "Países: ";
    foreach ($_REQUEST['paises'] as $pais) {
        echo $pais . " ";
    }
    echo "<br>";
}


if (isset($_REQUEST['email'])) {
    echo "Email: " . $_REQUEST['email'] . "<br>";
}

if (isset($_REQUEST['password'])) {
    echo "Password: " . $_REQUEST['password'] . "<br>";
}