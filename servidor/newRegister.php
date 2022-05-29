<?php
    require('db.php'); //Mando a llamar la conexion.
    
    //En variables meto los campos que se van a rellenar en el registro. Usando los name de los inputs.
    $name = $_POST['nombre'];
    $phone = $_POST['telefono'];
    $idAndadera = $_POST['id_andadera'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];

    $password = password_hash($pswd, PASSWORD_DEFAULT);

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Dentro de la variable query pongo la variable conexion con un atributo prepare() y dentro de este coloco la secuencia SQL.
    $query = $conexion -> prepare("INSERT INTO `users` (`name_user`, `phone`,`id_walker`, `email`, `passwd`) VALUES (:n, :t, :i, :e, :p);");
    
    $query -> bindParam(":n", $name);
    $query -> bindParam(":t", $phone);
    $query -> bindParam(":i", $idAndadera);
    $query -> bindParam(":e", $email);
    $query -> bindParam(":p", $password);
    $query -> execute();

    header('Location: /resources/out/login.php');
?>