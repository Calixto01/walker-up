<?php
    require ("resources/views/layouts/main.php");
    session_start();
    if(isset($_SESSION['usuario']))
    {
      ?>

<div  id="content">
      <section>
        <div class="container">
          <div class="row">
            <h1 class="font-weight-bold mb-0">BIENVENIDO</h1>
            <h4>Bienvenido a walker up</h4>
            <p class="lead text-muted">Aqui encontrara la informacion mas relevante de nuestra empresa</p>
          </div>
        <div class="container">
          <div class="row">
            <h1 class="font-weight-bold mb-0">¿Quienes somos?</h1>
            <p>Somos una pequeña empresa que estamos creando e innovando cosas ya existentes pero con diversos sistemas tecnologicos mas recientes,
              que le puede ayudar a alguien que realmente lo necesite.</p>
              <p>En este proyecto implementamos distintos sensores que pondran una mayor seguridad a quien use la andadera, tambien se implementara la a creacion de una aplicacion web, la cual brindara datos de lo recopilado con los sensores.</p>
            <img src="resources/images/iconos svg/logo_WALKER_UP.png" class="rounded mx-auto d-block" style="width:300px" alt="logotipo">
          </div>
  <center>
    <div id="centro">
      <h1>WALKER UP</H1>
    </div>
  </center>
</div>
<div>
<h1>Andadera WALKER UP</h1>
  <p class="text-body">La andadera esta creada con tubos de PVC, ya que consideramos que son un poco mas resistentes y firmes para el uso de una persona de la 3era edad</p>
  <p class="text-body">Esta andadera se puede considerar inteligente, ya que tiene integrado a ella distintos sensores los cuales le proporcionan mayor seguridad a quien lo use y al encargado del adulto mayor</p>
  <img src="resources/images/iconos svg/anda1.jpg" class="rounded float-left" style="width:250px" alt="">
  <img src="resources/images/iconos svg/anda2.jpg" class="rounded float-center" style="width:250px" alt="">
  <img src="resources/images/iconos svg/anda3.jpg" class="rounded float-left" style="width:250px" alt="">

<h1>RASPBERRY PI 4</h1>
<p class="text-primary">Es un ordenador de bajo coste y formato compacto destinado al desarrollado para hacer accesible la informática a todos los usuarios. La Raspberry Pi también se caracteriza por ser muy utilizada para desarrollar pequeños prototipos y para la formación sobre informática y electrónica en los colegios.</p>
<img src="resources/images/iconos svg/rasp.jpg" style="width:250px" alt="rasp">
<h1>SENSORES EN USO</h1>
  <h4>SENSOR ULTRASONICO</h4> 
    <p class="text-body">El sensor ultrasonico podra alertar al adulto mayor cuando se encuentre a una distancia de peligro con algun objeto, el buzzer integrado emitira una alerta que podra ser escuchada a quien este cerca de el</p>
    <centro>
      <div id="centro">
        <img src="resources/images/iconos svg/ultra.jpg" style="width:250px" alt="ultrasonico">
        <img src="resources/images/iconos svg/sensor-ultrasonico-explicacion.png" class="rounded float-center" style="width:250px" alt="">
      </div>
    </centro>
    <p class="text-danger">PELIGRO: El sensor no debe de ser golpeado contra algo, ya que podria dañarlo</p>
    <h4>SENSOR DE TEMPERATURA (DHT11)</h4>
    <p class="text-body">Este sensor ayudara a medir la temperatura en tiempo real en grados celcius</p>
    <img src="resources/images/iconos svg/dht11.jpg" style="width:250px" alt="dht11">
    <p class="text-danger">PELIGRO: El sensor no debe de mojarse con agua o exponerlo a altas y bajas temperatura durante un largo periodo de tiempo, ya que podria dañar su funcionamiento</p>
    <h4>SENSOR DE VIBRACION PWM 5V</h4>
    <p class="text-body">El sensor servira para mandar vibraciones a la andadera cuando reciba señales de peligro</p>
    <img src="resources/images/iconos svg/vibracion.jpg" style="width:250px" alt="vibra">
    <p class="text-danger">PELIGRO: En caso de emergencia, es cuando el sensor se activara, no en otra ocasion.</p>
  <h4>BOTON DE SWITCH</h4>
    <p class="text-body">Este boton estara programado para que en caso de alguna emergencia, el usuario debera de oprimir el boton para que lanze una alerta a la persona encargada, alertando de la emergencia.</p>
    <img src="resources/images/iconos svg/boton.jpg" style="width:250px" alt="boton">
    <img src="resources/images/iconos svg/eme.png" class="rounded float-right" style="width:250px" alt="eme">
    <p class="text-danger">PELIGRO: Si no existe ningun tipo de emergencia, no se debe de presionar el boton y menos repetidas veces, ya ue como consecuecia podria dañar el boton</p>
    <h1>LENGUAJES DE PROGRAMACION UTILIZADOS</h1>
    <p>Para este proyecto utilizamos distintos programas, en el raspberry utilizamos el lenguaje de programacion python, con ello codificamos cada uno de los sensores para poder utilizarlos correctamente. </p>
    <p>Para el desarrollo de la aplicacion web, utilizamos los lenguajes de javascript, php, html, css, ya que son los necesarios para darle un buen diseño y funcionamiento con la raspberry.</p>
    <img src="resources/images/iconos svg/lenguaje.jpg" class="rounded float-right" style="width:250px" alt="lenguaje">
    <div id="content">
      <section>
        <div class="container">
          <div class="row">
            <h1 clas="font-weight-bold mb-0">Personal de la empresa</h1>
    </div>
      <div class="container">
      <div class="card">
        <span class="border border-success"></span>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-3">
                <img src="resources/images/iconos svg/willy.jpg" style="width:100px" alt="perfil">
                <h3 class="font-weight-bold">William Ramses Vazquez Sanchez</h3>
                <h6 clasS="text-muted">Lider de proyecto y programador 1</h6>
                <h6 class="text-success">Alumno de la Universidad de Colima</h6>
              </div>
              <div class="col-lg-3">
                <h3 class="font-weight-bold">Carlos Alberto Calixto Engelberger</h3>
                <h6 clasS="text-muted">Programador 2</h6>
                <h6 class="text-success">Alumno de la Universidad de Colima</h6>
              </div>
              <div class="col-lg-3">
                <img src="resources/images/iconos svg/yo.jpg" style="width:100px" alt="perfil">
                <h3 class="font-weight-bold">Josue Dominguez Nambos</h3>
                <h6 clasS="text-muted">Programador 3 y Documentador 1</h6>
                <h6 class="text-success">Alumno de la Universidad de Colima</h6>
              </div>
              <div class="col-lg-3">
                <img src="resources/images/iconos svg/valla.jpeg" style="width:100px" style="height:100px" alt="perfil">
                <h3 class="font-weight-bold">Jesus Eduardo Valladares Navarrete</h3>
                <h6 clasS="text-muted">Diseñador de la andadera 1 y Documentador 2</h6>
                <h6 class="text-success">Alumno de la Universidad de Colima</h6>
              </div>
              <div class="col-lg-3">
              <img src="resources/images/iconos svg/david.jpg" style="width:100px" style="height:100px" alt="perfil">
                <h3 class="font-weight-bold">Argos David Bonales Garcia</h3>
                <h6 clasS="text-muted">Visualizador</h6>
                <h6 class="text-success">Alumno de la Universidad de Colima</h6>
              </div>
              <span class="border border-success"></span>
            </div>
    </header>

    <?php
}else{
  header('Location: resources/out/login.php');
}?>
    