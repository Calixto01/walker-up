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
    <form action="https://formsubmit.co/2299dc55c3c4eebc512cbf50afc2b2c4" method="post">
        <div class="mb-3">
              <label class="form-label">Full Name</label>
              <input name="name" type="text" class="form-control" required />
            </div>

            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input name="email" type="email" class="form-control" required />
              <div id="emailHelp" class="form-text">
                Don't worry, we won't share it with anyone else.
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Phone (optional)</label>
              <input name="phone" \type="tel" class="form-control" />
              <div id="phoneHelp" class="form-text">
                If you rather talk to a human directly.
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label">Your Message</label>
              <textarea
                name="message"
                class="form-control"
                rows="3"
                required
              ></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>  

<?php
    }else{
        header("Location: /resources/out/login.php");
    }
?>