<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/resources/css/login_register.css">
    <title>Regitro</title>
</head>
    <body class="body-log">
        <div class="container card my-5 shadow"> 
            <div class="row">
                 <!--primera columna-->
                <div class="col BG ">
                   
                </div>
                <!--segunda columna-->
                <div class="col my-4">
                    <div class="text-center">
                        <img class="my-2" src="/resources/images/fondos/Logo v11.png" width="120px" alt="">
                    </div>
                  
                    <h2 class="fw-bolder text-center py-4">Bienvenido a Walker Up</h2>
                    <!--------Registro-------->
                    <form action="/servidor/newRegister.php" method="POST">
                        <div class="mb-3">
                            <label for="text" class="form-label">Nombre</label>
                            <input type="name" class="form-control" name="nombre" placeholder="Nombre" require>
                        </div>
                        <div class="mb-3">
                            <label for="text" class="form-label">Phone</label>
                            <input type="phone" class="form-control" name="telefono" placeholder="Telefono" require>
                        </div>

                        <div class="mb-3">
                            <label for="text" class="form-label">ID Andadera</label>
                            <input type="text" class="form-control" name="id_andadera" placeholder="ID" require>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Correo Electronico" required>
                        </div>
                        <div class="mb-3">
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
                                Registrarse
                            </button>
                        </div>
                        <div class="my-3">
                            <span>
                                Ya tienes cuenta? <a href="/resources/out/login.php">Inicia Sesion</a>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </body>
    <script src="/resources/js/bootstrap.bundle.min.js"></script>
</html>