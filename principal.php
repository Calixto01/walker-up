<?php
    require ("resources/views/layouts/main.php");
    session_start();
    if(isset($_SESSION['usuario']))
    {
      ?>
    <div class="container">
      <div class="row text-center">
        <h1>BIENVENIDO</h1>
        <h6>Bienvenido a walker up.</h6>
        <p class="lead text-muted">Aqui encontrara la informacion mas relevante de nuestra empresa.</p>
      </div>
      <hr>
      <div class="row">
        <h2>¿Quienes somos?</h2>
        <p class="text-justify" style="text-align:justify">Somos una pequeña empresa que estamos creando e innovando cosas ya existentes pero con diversos sistemas tecnologicos mas recientes, que le puede ayudar a alguien que realmente lo necesite.<br>En este proyecto implementamos distintos sensores que pondran una mayor seguridad a quien use la andadera, tambien se implementara la a creacion de una aplicacion web, la cual brindara datos de lo recopilado con los sensores.</p>
        <img src="resources/images/iconos_svg/logo_WALKER_UP.png" class="rounded mx-auto d-block" style="width:30%" alt="logotipo">
        <h1 class="text-center">Walker Up</h1>
      </div>
      <hr>
      <div class="row">
        <div class="row">
          <div class="col">
            <h2>Andadera "Walker Up"</h2>
            <p class="text-justify" style="text-align:justify">La andadera esta creada con tubos de PVC, ya que consideramos que son un poco mas resistentes y firmes para el uso de una persona de la 3era edad.<br>Esta andadera se puede considerar inteligente, ya que tiene integrado a ella distintos sensores los cuales le proporcionan mayor seguridad a quien lo use y al encargado del adulto mayor.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-4"><img src="resources/images/iconos_svg/anda1.jpg" class="rounded mx-auto d-block" style="width:70%" alt=""></div>
          <div class="col-4"><img src="resources/images/iconos_svg/anda2.jpg" class="rounded mx-auto d-block" style="width:70%" alt=""></div>
          <div class="col-4"><img src="resources/images/iconos_svg/anda3.jpg" class="rounded mx-auto d-block" style="width:70%" alt=""></div>
        </div>
      </div>
      <hr>
      <div class="row">
        <h2 class="text-center">Componentes utilizados.</h2>
        <p></p>
        <div class="row justify-content-md-center">
          <div class="card col-4">
            <div class="card-body">
              <h3 class="text-center">RASPBERRY PI 4</h3>
              <p class="text-justify" style="text-align:justify">Es un ordenador de bajo coste y formato compacto destinado al desarrollado para hacer accesible la informática a todos los usuarios.<br>La Raspberry Pi también se caracteriza por ser muy utilizada para desarrollar pequeños prototipos y para la formación sobre informática y electrónica en los colegios.</p>
              <img src="resources/images/iconos_svg/rasp.jpg" style="width:100%" alt="" class="card rounded mx-auto">
            </div>
          </div>
        </div>
        <hr>
        <p></p>
        <h2 class="text-center">Sensores en uso.</h2>
        <div class="row mb-5">
          <div class="card col-4">
            <div class="card-body">
              <h3>SENSOR ULTRASONICO.</h3>
              <p style="text-align: justify;">El sensor ultrasonico podra alertar al adulto mayor cuando se encuentre a una distancia de peligro con algun objeto, el buzzer integrado emitira una alerta que podra ser escuchada a quien este cerca de el.</p>
              <div class="col">
                <img src="resources/images/iconos_svg/ultra.jpg" style="width:100%" alt="ultrasonico">
              </div>
              <div class="col">
                <img src="resources/images/iconos_svg/sensor-ultrasonico-explicacion.png" class="card rounded mx-auto" style="width:100%" alt="">
              </div>
              <p class="text-danger">PELIGRO: El sensor no debe de ser golpeado contra algo, ya que podria dañarlo.</p>
            </div>
          </div>
          <div class="card col-4">
            <div class="card-body">
              <h3>SENSOR DE TEMPERATURA (DHT11).</h3>
              <p style="text-align: justify;">Este sensor ayudara a medir la temperatura en tiempo real en grados celcius (C°).</p>
              <img src="resources/images/iconos_svg/dht11.jpg" class="card rounded mx-auto" style="width:100%" alt="dht11">
              <p class="text-danger" style="text-align: justify;">PELIGRO: El sensor no debe de mojarse con agua o exponerlo a altas y bajas temperatura durante un largo periodo de tiempo, ya que podria dañar su funcionamiento.</p>
            </div>
          </div>
          <div class="card col-4">
            <div class="card-body">
              <h3>SENSOR DE VIBRACION PWM 5V.</h3>
              <p style="text-align: justify;">El sensor servira para mandar vibraciones a la andadera cuando reciba señales de peligro.</p>
              <img src="resources/images/iconos_svg/vibracion.jpg" class="card rounded mx-auto" style="width:100%" alt="vibra">
              <p class="text-danger">PELIGRO: En caso de emergencia, es cuando el sensor se activara, no en otra ocasion.</p>
            </div>
          </div>
        </div>
        <div class="row mb-5">
          <div class="card col-4">
            <div class="card-body">
              <h3>BOTON DE SWITCH.</h3>
              <p style="text-align: justify;">Este boton estara programado para que en caso de alguna emergencia, el usuario debera de oprimir el boton para que lanze una alerta a la persona encargada, alertando de la emergencia.</p>
              <img src="resources/images/iconos_svg/eme.png" class="rounded card mx-auto" style="width:60%" alt="eme">
              <img src="resources/images/iconos_svg/boton.jpg" class="rounded card mx-auto" style="width:60%" alt="boton">
              <p class="text-danger" style="text-align:justify">PELIGRO: Si no existe ningun tipo de emergencia, no se debe de presionar el boton y menos repetidas veces, ya ue como consecuecia podria dañar el boton</p>
            </div>
          </div>
          <div class="card col-8">
            <div class="card-body">
              <h3>LENGUAJES UTILIZADOS.</h3>
              <p style="text-align:justify;">Para este proyecto utilizamos distintos programas, en el raspberry utilizamos el lenguaje de programacion python, con ello codificamos cada uno de los sensores para poder utilizarlos correctamente.<br>Para el desarrollo de la aplicacion web, utilizamos los lenguajes de javascript, php, html, css, ya que son los necesarios para darle un buen diseño y funcionamiento con la raspberry.</p>
              <img src="resources/images/iconos_svg/lenguaje.jpg" class="rounded card mx-auto" style="width:100%" alt="lenguaje">
            </div>
          </div>
        </div>
      </div>
      <hr>
      <div class="row mb-5">
        <h2>PERSONAL DE LA EMPRESA.</h2>
        <span class="border border-success"></span>
        <div class="card col-6">
          <div class="card-body">
            <img src="resources/images/iconos_svg/willy.jpg" class="card rounded mx-auto" style="width:60%" alt="perfil">
            <h3 class="font-weight-bold text-center">William Ramses Vazquez Sanchez</h3>
            <p class="lead text-muted text-center">Lider de equipo y Jefe de Desarrollo Web.</p>
          </div>
          <div class="card-footer">
            <h6 class="text-success text-center">Alumno de la Universidad de Colima</h6>
          </div>
        </div>
        <div class="card col-6">
          <div class="card-body">
            <img src="resources/images/iconos_svg/calixto.jpg" class="card rounded mx-auto" style="width:60%" alt="perfil">
            <h3 class="font-weight-bold text-center">Carlos Alberto Calixto Engelberger</h3>
            <p class="lead text-muted text-center">Programador y Encargado de funcionamiento.</p>
          </div>
          <div class="card-footer">
            <h6 class="text-success text-center">Alumno de la Universidad de Colima</h6>
          </div>
        </div>
      </div>
      <div class="row mb-5">
        <div class="card col-6">
          <div class="card-body">
            <img src="resources/images/iconos_svg/valla.jpeg" class="card rounded mx-auto" style="width:60%" alt="perfil">
            <h3 class="font-weight-bold text-center">Jesus Eduardo Valladares Navarrete</h3>
            <p class="lead text-muted text-center">Documentador Jefe y Diseñador de Andadera.</p>
          </div>
          <div class="card-footer">
            <h6 class="text-success text-center">Alumno de la Universidad de Colima</h6>
          </div>
        </div>
        <div class="card col-6">
          <div class="card-body">
            <img src="resources/images/iconos_svg/yo.jpg" class="card rounded mx-auto" style="width:60%" alt="perfil">
            <h3 class="font-weight-bold text-center">Josue Dominguez Nambos</h3>
            <p class="lead text-muted text-center">Desarrollador Web y Documentador.</p>
          </div>
          <div class="card-footer">
            <h6 class="text-success text-center">Alumno de la Universidad de Colima</h6>
          </div>
        </div>
      </div>
      <div class="row justify-content-md-center">
        <div class="card col-6">
          <div class="card-body">
            <img src="resources/images/iconos_svg/david.jpg" class="card rounded mx-auto" style="width:60%" alt="perfil">
            <h3 class="font-weight-bold text-center">Argos David Bonales Garcia</h3>
            <p class="lead text-muted text-center">Visualizador.</p>
          </div>
          <div class="card-footer">
            <h6 class="text-success text-center">Alumno de la Universidad de Colima</h6>
          </div>
        </div>
      </div>

    </div>

    <?php
}else{
  header('Location: resources/out/login.php');
}?>
    