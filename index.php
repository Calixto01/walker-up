<?php
    require ("resources/views/layouts/main.php");

    session_start();
    if(isset($_SESSION['usuario'])){
?>
    <div class="text-center fw-bold">
        <h1>Walker Up</h1>
    </div>

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
    </div>
<?php
    }else{
        header('Location: resources/out/login.php');
    }?>
