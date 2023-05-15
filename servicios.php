<?php
require('conexion.php');

$servicio = $_GET('servicio');

$select = " SELECT code FROM servicios WHERE
servicio = '$servicio' ";
$decode = $con->query($select);
$row = $decode->fetch_assoc();

$code = $row['code']
?>


<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pucervices</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
  </head>
  <body>
    <main>
        <header class="header bg-all">
          <div class="logo">
            <img src="./assets/imgs/logo.png" alt="Logo de Pucervices">
          </div>
          <button id="toggler"><i id="icon" class="fa-xl fa-solid fa-bars"></i></button>
          <nav id="nav" class="hide">
            <a class="navlinks" href="./index.html" data-animation="bonus">Inicio</a>
            <a href="#servicioss">Servicios</a>
            <a href="#somos">Acerca de</a>
            <a href="#bottom">Contacto</a>
          </nav>
        </header>
        <div class="servicio">    
          <?php
          echo $code
          ?>
                  <div class="btnsservicio">
                    <a class="btnservicio">Solicitar Información Personalizada</a>
                    <a class="btnservicio">Solicitar Servicio</a>
                  </div>
        </div>

        <section class="contacto" id="contacto">
          <div class="contactobox">
            <div class="contacto1">
              <h2 class="contactotitle">CONTACTO</h2>
              <h4 class="contactotxt">RELLENE EL SIGUIENTE FORMULARIO 
                PARA CONTACTAR CON NOSOTROS</h4>
                <div class="contactospace"></div>
              <h4 class="contactotxt">TAMBIEN PUEDE CONTACTAR CON 
                  NOSOTROS A TRAVES DE:</h4>
              
                  <h4 class="contactootros">EMAIL</h4>
                  <p class="contactootro"><a href="mailto:contacto.pucervices@gmail.com">
                    contacto.pucervices@gmail.com</a></p>
                  <h4 class="contactootros">INSTAGRAM</h4>
                  <p class="contactootro contactootro2"><a href="">@pucervices</a></p>
            </div>
            <div class="contacto2">
              <form action="" class="contactoform">
                <input type="text" placeholder="NOMBRE COMPLETO">
                <input type="email" placeholder="EMAIL">
                <select name="" id="">
                <option disabled selected>SELECCIONA UNA OPCION</option>
                <option value="1">1</option>
                <option value="2">2</option>
                </select>
                <textarea class="messageinput" type="text" 
                placeholder="MENSAJE"></textarea>
                <input class="enviarbtn" type="submit" value="ENVIAR">
              </form>
    
            </div>
          </div>
    
        </section>
    
    


    <section id="bottom" class="footer">
      <div class="footer1">
        <div class="footlogo">
          <img src="./assets/imgs/logo.png" alt="">
        </div>
        <div class="footlinks">
          <ul>
            <li class="foottitle">SERVICIOS</li>
            <a href="./index.html#ig"><li class="footlink">INSTAGRAM</li></a>
            <a href="./index.html#google"><li class="footlink">GOOGLE</li></a>
            <a href="#"><li class="footlink">WEB</li></a>
            <a href="./index.html#otros"><li class="footlink">OTROS</li></a>
          </ul>
          <ul>
            <li class="foottitle">CONTACTO</li>
            <a href=""><li class="footlink">EMAIL</li></a>
            <a href=""><li class="footlink">INSTAGRAM</li></a>
            <a href=""><li class="footlink">WEB</li></a>
          </ul>
        </div>
      </div>
      <div class="footer2">
        <p class="copy"><b>Copyright © Pucervices 2023</b> &nbsp;&nbsp;&nbsp; All Right Reserved.</p>
      </div>
    </section>

    </main>
    
    
    <script src="./assets/js/script.js"></script>
    <script src="https://kit.fontawesome.com/b58d63da4c.js" crossorigin="anonymous"></script>
  </body>

</html>
