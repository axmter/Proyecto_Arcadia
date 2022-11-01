<?php
session_start();
if (isset($_SESSION["usuario"])) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location:bienvenido.php");
//salimos de este script
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juegos de Atari</title>
    <link rel="stylesheet" href="css/estilo13.css">
    <link rel="icon" href="imagenes/at.png">
</head>
<body>
 
 <header class="header">
   <center><div class="container">
          <div class="logo">
<p><img src="imagenes/at.png" width="250px" height=""></p>
           </div>

  </div></center>

</header>
 
     <br><br><br><br>

    <center>
    

 <div class="fila">
        <div class="columna">
            <a href="ROMSPG/DK.php">
            <img src="imagenes/juegos/dk.jpg"  height="300px">
        </div>
        <div class="columna">
            <a href="ROMSPG/FR.php">
            <img src="imagenes/juegos/fr.jpg"  height="300px">
        </div>
        <div class="columna">
            <a href="ROMSPG/RMP.php">
            <img src="imagenes/juegos/rmp.jpg"  height="300px">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <a href="ROMSPG/Q.php">
            <img src="imagenes/juegos/q.jpg"  height="300px">
        </div>
        <div class="columna">
            <a href="ROMSPG/SPI.php">
            <img src="imagenes/juegos/spa.jpg"  height="300px">
        </div>
        <div class="columna">
            <a href="ROMSPG/PCM.php">
            <img src="imagenes/juegos/pac.jpg"  height="300px">
        </div>
    </div>
    </center>
       
</body>
</html>