<?php
    require ("resources/views/layouts/main.php");

    session_start();
    if(isset($_SESSION['usuario'])){
?>
    <div class="card mb-4">
    <div class="text-center fw-bold">
        <h1>Walker Up</h1>
    </div>

    <div class="row mx-5">
        <div class="container my-4">
            <div class="card">
            <div class="card-header" style="width: 10rem;">
                <p class="text-danger">ADVERTENCIA!</p>
            </div>
            <div class="alert alert-danger" role="alert">
                SE HA REGISTRADO UNA ACCIDENTE <a href="#" class="alert-link">ATENDER EMERGENCIA</a>
            </div>
            <div class="card-body">
                <h5 class="card-title">Boton de panico</h5>
                <p class="card-text">Se mostrara informacion cuando se haya presionado el boton de emergencia</p>
                <a href="#" class="btn btn-danger">Ver accidentes</a>
            </div>
        </div>
    </div>
    <div class="col ml5">
        <div class="card" style="width: 20rem;">
            <img src="resources/images/iconos svg/sensor-ultrasonico-explicacion.png" class="card-img-top" alt="logo">
            <div class="card-body">
                <h5 class="card-title">Sensor Ultrasonico</h5>
                <p class="card-text">Aqui se muestra las distancias que se han registrado en la andadera</p>
                <a href="#" class="btn btn-secondary">Ver detalles</a>
            </div>
        </div> 
    </div>
    <div class="col ml5">
        <div class="card" style="width: 15rem;">
                <img src="resources/images/iconos svg/acele.jpg" class="card-img-top" alt="logotype">
                 <div class="card-body">
                    <h5 class="card-title">Registros de acelereación</h5>
                    <p class="card-text">Vea si se tienen registros del acelerometro con una frecuencia acelerada</p>
                    <a href="#" class="btn btn-primary">Ver registros</a>
                 </div> 
        </div>
    </div>
    <div class="col ml5">
        <div class="card" style="width: 15rem;">
                <img src="resources/images/iconos svg/o no.jpg" class="card-img-top" alt="logotype">
                <div class="card-body">
                    <h5 class="card-title">Registros de accidentes registrados en la andadera</h5>
                    <p class="card-text">Vea si se tienen registros de una frecuencia acelerada</p>
                    <a href="#" class="btn btn-warning">Atender</a>
                </div>
         </div>
    </div>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">¿Que hacer en caso de una emergencia?</h5>
            <h6 class="cfard-subtitle mb-2 text-muted">No dudes en llamar a algun servivicio de emergencia!</h6>
            <p class="card-text">A continuacion te dejaremos los numeros de servicios de emergencia</p>
            <p class="card-text">Numero de la cruz roja en Manzanillo :</p><p class="text-primary"> 314 336 5770 </p>
        </div>
    </div>

            <?php // progres bar--------------------------------------?>
           
            <div class="col mb-3 mx-3 my-3 card align-content-center">
                
                <div class="progress" id="progress">
                    
                <script class="align-content-center" type="text/javascript">
                    
                    const Heart = () => {
                        var circle = new ProgressBar.Circle('#progress', {
                            color: '#ED6A5A',
                            duration: 5000,
                            easing: 'easeInOut'
                        });
                    
                        circle.animate(1);
                    };
                
                </script>
               </div>
               <button class="btn btn-primary " onclick="Heart()">Heart </button>
                 
            </div>
        </div>
    </div>
</div>

<?php
    }else{
        header('Location: resources/out/login.php');
    }?>
