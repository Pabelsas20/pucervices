<?php
require('conexion.php');

$servicio = "prueba2";
$code= "<h2 class=\"tservicio\">Diseño de Contenido</h2>
<p class=\"pservicio\">Si estás buscando mejorar 
  la estética y calidad de tu contenido 
  en Instagram, nuestro servicio de 
  diseño de contenido es ideal para ti. 
  Nos encargamos de crear contenido visualmente 
  atractivo y en línea con la imagen de tu marca.
   <br><br><br>
  <b>Beneficios: </b> &nbsp;&nbsp;&nbsp; Al contratar 
  nuestro servicio de diseño de contenido 
  para Instagram, podrás disfrutar 
  de los siguientes beneficios:
  <br><br>
  - Contenido visualmente atractivo 
  y en línea con la imagen de tu marca <br>
  - Publicaciones regulares y coherentes
  en tu cuenta de Instagram <br>
  -  Mayor interacción con los seguidores 
  gracias a un contenido más atractivo <br>
  - Mejora de la percepción de tu marca en Instagram
  </p>";





$insertar = ("INSERT INTO servicios (servicio, code) 
VALUES ('$servicio', '$code')");

$insert = mysqli_query($con, $insertar);

?>
