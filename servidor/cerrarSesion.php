<?php
    session_start(); //Le decimos que llame las sesiones.
    unset($_SESSION["usuario"]); //Destruimos la variable de la sesion.
    session_destroy();  //Destruimos la sesion.
    header("Location: /resources/out/login.php"); //No hace falta que te explique xd
    exit;
?>