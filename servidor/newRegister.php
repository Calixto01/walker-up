<?php
    require('db.php'); //Mando a llamar la conexion.
    
    //En variables meto los campos que se van a rellenar en el registro. Usando los name de los inputs.
    $name = $_POST['nombre'];
    $phone = $_POST['telefono'];
    $email = $_POST['email'];
    $pswd = $_POST['password'];

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Dentro de la variable query pongo la variable conexion con un atributo prepare() y dentro de este coloco la secuencia SQL.
    $query = $conexion -> prepare("INSERT INTO `walker-users` (`name_user`, `phone`, `email`, `passwd`) VALUES (:n, :t, :e, :p);");
    
    $query -> bindParam(":n", $name);
    $query -> bindParam(":t", $phone);
    $query -> bindParam(":e", $email);
    $query -> bindParam(":p", $pswd);
    $query -> execute();

    header('Location: /resources/out/login.php');
?>