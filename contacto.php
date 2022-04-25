<?php
    require ("resources/views/layouts/main.php");
    session_start();
    if(isset($_SESSION['usuario'])){
?>

<div class="container card shadow my-2">
    <div class="text-start mb-4">
        <h1>Contacto</h1>
        <br>
        <h4>Comunicate con nuestro equipo</h4>
        <br>
        <a class="text-decoration-none" href="mailto:ccalixtoengelbergergamerpro@gmail.com.mx?subject=Contacto&body=Quiero saber mas!!">
        <i class="bi bi-envelope"></i> 
        Enviar Email
        </a>
        <br><br>
        <text>
        <i class="bi bi-telephone-forward"></i> 314-338-7923
        </text>
    </div>
    <form action="#">
        <div class="row mb-2">
            <div class="col">
                <label for="name" class="form-label" >Nombre</label>
                <input type="text" class="form-control" name="Nombre" placeholder="Nombre">                
            </div>
            <div class="col">
                <label for="name" class="form-label" >Email</label>
                <input type="text" class="form-control" name="Email" placeholder="Email">
            </div>
        </div>
        <div class="mb-4">
            <label for="name" class="form-label" >Asunto</label>
            <input type="text" class="form-control" name="Asunto" placeholder="Asunto">
        </div>
        <div class="mb-4">
            <textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
        </div>
        <!---card-footer= clase que podemos usar--->
        <div class="footer">
            <button type="submit" class="btn btn-primary float-end my-1">
                Enviar
                <i class="bi bi-send-fill"></i>
            </button>

        </div>
    </form>
</div>  

<?php
    }else{
        header("Location: /resources/out/login.php");
    }
?>