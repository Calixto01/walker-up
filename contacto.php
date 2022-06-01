<?php
    require ("resources/views/layouts/main.php");
    session_start();
    if(isset($_SESSION['usuario'])){
?>

<div class="container card col-4">
    <form action="https://formsubmit.co/2299dc55c3c4eebc512cbf50afc2b2c4" method="post" class="mt-3">
        <div class="mb-3">
              <label class="form-label">Nombre Completo</label>
              <input name="name" type="text" class="form-control" required />
            </div>

            <div class="mb-3">
              <label class="form-label">Correo Electronico</label>
              <input name="email" type="email" class="form-control" required />
              <div id="emailHelp" class="form-text">
                Esto no se compartirá con nadie, no hay de que preocuparse.
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Telefono (Opcional)</label>
              <input name="phone" \type="tel" class="form-control" />
              <div id="phoneHelp" class="form-text">
                En caso de que quieras hablar directamente.
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Tu mensaje.</label>
              <textarea name="message" class="form-control" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-primary mb-3"><i class="bi bi-send"></i> Enviar</button>
    </form>
</div>  

<?php
    }else{
        header("Location: /resources/out/login.php");
    }
?>