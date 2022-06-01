<?php
    require ("resources/views/layouts/main.php");
    
    require ("servidor/db.php");
    session_start();
    if(isset($_SESSION['usuario'])){

    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = $conexion -> prepare("SELECT * FROM `old_person` WHERE `id_carer` = :i");
    $query -> bindParam(":i", $_SESSION['usuario']);
    $query -> execute();

    $datos = $query -> fetch(PDO::FETCH_ASSOC);?>

<div class="container">
    <table class="table table-striped table-bordered">
    <div class="text-center fw-bold table">
        <h1>Walker Up</h1>
    </div>
    
    <?php 
        if($datos > 0){
            ?>
    <div class="row mb-4">
        <div class="col-5 p-2" style="background-color: #F7DCC7"><p><b>Nombre:</b> <?php echo $datos['firstName'];?></p></div>
        <div class="col-5 p-2" style="background-color: #FBC5A7"><p><b>Apellido:</b> <?php echo $datos['lastName'];?></p></div>
        <div class="col-2 p-2" style="background-color: #F7DCC7"><p><b>Edad:</b> <?php echo $datos['age'];?> años.</p></div>
    </div>
    <div class="row mb-4">
        <div class="col-5 p-2" style="background-color: #FBC5A7"><p><b>Fecha de Nacimiento:</b> <?php echo $datos['dateOfBirth'];?></p></div>
        <div class="col-4 p-2" style="background-color: #F7DCC7"><p><b>Lugar de Nacimiento:</b> <?php echo $datos['placeOfBirth'];?></p></div>
        <div class="col-3 p-2" style="background-color: #FBC5A7"><p><b>C.U.R.P:</b> <?php echo $datos['CURP'];?></p></div>
    </div>
    <div class="row mb-4">
        <div class="col-3 p-2" style="background-color: #F7DCC7"><p><b>NSS:</b><?php echo $datos['NSS'];?></p></div>
        <div class="col-3 p-2" style="background-color: #FBC5A7"><p><b>RFC:</b> <?php echo $datos['RFC'];?></p></div>
        <div class="col-6 p-2" style="background-color: #F7DCC7"><p><b>Padecimientos:</b> <?php echo $datos['healtProblem'];?></p></div>
    </div>
    
    <?php 
        }else{?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalLong">
        Agregar paciente.
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Agregar Paciente</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                <span class="btn btn-danger"aria-bs-hidden="true">X</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formulario" action="servidor/newPaciente.php" method="POST">
                    <div class="mb-3">
                    <label for="firstName">Nombre:</label>
                    <input class="form-control" type="text" name="firstName" id="nombre" placeholder="Introduce el Nombre..." required>
                    </div>
                
                    <div class="mb-3">
                    <label for="lastName">Apellido:</label>
                    <input class="form-control" type="text" name="lastName" id="apellido" placeholder="Introduce el Apellido..." required>
                    </div>

                    <div class="mb-3">
                    <label for="age">Edad:</label>
                    <input class="form-control" type="text" name="age" id="edad" placeholder="Introduce la edad..." required>
                    </div>

                    <div class="mb-3">
                    <label for="birthday">Fecha de nacimiento:</label>
                    <input class="form-control" type="text" name="birthday" id="fechaNacimiento" placeholder="Introduce la fecha de nacimiento..." required>
                    </div>

                    <div class="mb-3">
                    <label for="place">Lugar de nacimiento:</label>
                    <input class="form-control" type="text" name="place" id="place" placeholder="Introduce el lugar de nacimiento..." required>
                    </div>

                    <div class="mb-3">
                    <label for="curp">C.U.R.P:</label>
                    <input class="form-control" type="text" name="curp" id="curp" placeholder="Introduce CURP..." required>
                    </div>

                    <div class="mb-3">
                    <label for="nss">NSS:</label>
                    <input class="form-control" type="text" name="nss" id="nss" placeholder="Introduce el NSS..." required>
                    </div>

                    <div class="mb-3">
                    <label for="rfc">RFC:</label>
                    <input class="form-control" type="text" name="rfc" id="rfc" placeholder="Introduce el RFC..." required>
                    </div>

                    <div class="mb-3">
                    <label for="problem">Padecimiento:</label>
                    <input class="form-control" type="text" name="problem" id="padecimientos" placeholder="Introduce los padecimientos..." required>
                    </div>
                    <button type="submit" class="btn btn-success">Guardad</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
            </div>
            </div>
        </div>
        </div>
        <?php
        }
    ?>
</div>
    </table>
<!--
    <div class="row mx-5">
        <div class="container my-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Boton de panico</h5>
                    <p class="card-text">Se mostrara informacion cuando se haya presionado el boton de emergencia</p>
                    <a href="#" class="btn btn-danger">Ver accidentes</a>
                </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col ml5 card">
            <div>
                <img src="resources/images/iconos svg/sensor-ultrasonico-explicacion.png" class="card-img-top" alt="logo">
                <div class="card-body">
                    <h5 class="card-title">Sensor Ultrasonico</h5>
                    <p class="card-text">Aqui se muestra las distancias que se han registrado en la andadera</p>
                    <a href="#" class="btn btn-secondary">Ver detalles</a>
                </div>
            </div>
        </div>
        <div class="col ml5 card">
            <div >
                    <img src="resources/images/iconos svg/acele.jpg" class="card-img-top" alt="logotype">
                    <div class="card-body">
                        <h5 class="card-title">Registros de acelereación</h5>
                        <p class="card-text">Vea si se tienen registros del acelerometro con una frecuencia acelerada</p>
                        <a href="#" class="btn btn-primary">Ver registros</a>
                    </div> 
                </div>
        </div>
        <div class="col ml5 card ">
            <div>
                    <img src="resources/images/iconos svg/o no.jpg" class="card-img-top" alt="logotype">
                    <div class="card-body">
                        <h5 class="card-title">Registros de accidentes registrados en la andadera</h5>
                        <p class="card-text">Vea si se tienen registros de una frecuencia acelerada</p>
                        <a href="#" class="btn btn-warning">Atender</a>
                    </div>
            </div>
        </div>
        <div class="col ml5 card">
            <div>
                <h5 class="card-title">¿Que hacer en caso de una emergencia?</h5>
                <h6 class="cfard-subtitle mb-2 text-muted">No dudes en llamar a algun servivicio de emergencia!</h6>
                <p class="card-text">A continuacion te dejaremos los numeros de servicios de emergencia</p>
                <p class="card-text">Numero de la cruz roja en Manzanillo :</p><p class="text-primary"> 314 336 5770 </p>
            </div> 
        </div> 
    </div>-->
    <?php
    }else{
        header('Location: resources/out/login.php');
    }?>
