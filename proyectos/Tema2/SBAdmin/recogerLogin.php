<?php

if (isset($_REQUEST['email'])) {
    echo "Email: " . $_REQUEST['email'] . "<br>";
}

if (isset($_REQUEST['password'])) {
    echo "Contraseña: " . $_REQUEST['password'] . "<br>";
}

if (isset($_REQUEST['checkbox'])) {
    echo "Recordarme: " . $_REQUEST['checkbox'] . "<br>";
}

