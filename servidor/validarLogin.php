<?php 
    session_start(); //Iniciaré las propiedades de sesion.
    require('db.php'); //Mando a llamar la conexion.

    //Aguardo los datos del campo de los inputs.
    $email = $_POST['email'];
    $pswd = $_POST['password'];

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Dentro de la variable query pongo la variable conexion con un atributo prepare() y dentro de este coloco la secuencia SQL.
    $query = $conexion -> prepare("SELECT * FROM `walker-users` WHERE `email` = :email AND `passwd` = :pswd;");
    $query ->  bindParam(":email", $email);
    $query ->  bindParam(":pswd", $pswd);
    $query -> execute();
    $usuario = $query -> fetch(PDO::FETCH_ASSOC);

    if($usuario){
        $_SESSION['usuario'] = $usuario['name_user'];
        header('Location: /index.php');
    }else{
        echo 'Los Datos introducidos son erroneos.';
    }

?>