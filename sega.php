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
    <title>Juegos de Sega</title>
    <link rel="stylesheet" href="css/estilo13.css">
    <link rel="icon" href="imagenes/se.png">
</head>
<body>
 
 <header class="header">
   <center><div class="container">
          <div class="logo">
<p><img src="imagenes/se.png" width="250px" height=""></p>
           </div>

  </div></center>

</header>
 
     <br><br><br><br>

    <center>
    

 <div class="fila">
        <div class="columna">
            <img src="imagenes/juegos/rs.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/so.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/sf.jpg"  height="300px">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <img src="imagenes/juegos/mvc.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/mk.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/re2.jpg"  height="300px">
        </div>
    </div>
    </center>
       
</body>
</html>