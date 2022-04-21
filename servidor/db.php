<?php
    $conexion = null;
    $servidor = 'localhost'; //Nombre del servidor
    $database = 'walker-up'; //Nombre de la base de datos.
    $user = 'root'; //Usuario de la base de datos.
    $pass = ''; //Contraseña del usuario de la base de datos.

    try{
        //En la variable "conexion" hago la conexion usando el metodo PDO. Es dificil de explicar, por lo que recomiendo leer la documentacion.
        $conexion = new PDO('mysql:host='.$servidor.';dbname='.$database, $user, $pass);
    }catch (PDOException $e){
        //Un mensaje claro de posibles errores.
        echo 'Error:' . $e -> getMessage() . "<br/>";
        exit;
    }

    return $conexion;
?>