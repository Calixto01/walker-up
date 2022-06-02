<?php 
    require('db.php'); //Mando a llamar la conexion.
    error_reporting(0);

    //Aguardo los datos del campo de los inputs.
    $email = $_POST['email'];
    $pswd = $_POST['password'];

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //Dentro de la variable query pongo la variable conexion con un atributo prepare() y dentro de este coloco la secuencia SQL.
    $query = $conexion -> prepare("SELECT * FROM `users` WHERE `email` = :email");
    $query ->  bindParam(":email", $email);
    $query -> execute();
    $usuario = $query -> fetch(PDO::FETCH_ASSOC);

    $password_BD = $usuario['passwd'];

    if($usuario['email'] && password_verify($pswd, $password_BD)){
        session_start();
        $_SESSION['usuario'] = $usuario['id_users'];
        header('Location: /index.php');
    }else{  
        echo '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
            <link rel="stylesheet" href="/resources/css/login_register.css">
            <title>Inicio De Sesion</title>
        </head>
            <body class="body-log">
                <div class="container card my-4 shadow"> 
                    <div class="row border-white">
                         <!--primera columna-->
                        <div class="col BG ">
                           
                        </div>
                        <!--segunda columna-->
                        <div class="col my-2">
                            <div class="text-center">
                                <img class="my-2" src="/resources/images/fondos/Logo v11.png" width="120px" alt="">
                            </div>
                            <h2 class="fw-bolder text-center py-4">Bienvenido A Walker UP</h2>
                            <!--------LOGIN-------->
                            <div class="alert alert-warning" role="alert">
                            <i class="bi bi-exclamation-circle-fill"></i> LOS DATOS INTRODUCIDOS SON ERRONEOS.
                            </div>
                            <form action="/servidor/validarLogin.php" class="login-form" method="POST">
                                <div class="mb-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required>
                                </div>
                                <div class="mb-4">
                                <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="Contraseña" required>
                                </div>
                                <!-- este apartado es un checkbox por si queremos mantener sesion activa
                                <div class="mb-4 form-check">
                                    <input type="checkbox" name="connected" class="form-check-input">
                                    <label for="connected" class="form-check-label">Mantener sesion activa</label>
                                </div>
                                    --->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">
                                    <i class="bi bi-box-arrow-in-right"></i>
                                        Iniciar sesion
                                    </button>
                                </div>
                                <div class="my-3">
                                    <span>
                                        No tienes cuenta? <a href="/resources/out/register.php">Registrate</a>
                                    </span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
        
            </body>
            <script src="/resources/js/bootstrap.bundle.min.js"></script>
        </html>';
    }
?>