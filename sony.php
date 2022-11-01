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
	<title>Juegos de Play Station</title>
	<link rel="stylesheet" href="css/estilo14.css">
    <link rel="icon" href="imagenes/pls.png">
</head>
<body>
 
 <header class="header">
   <center><div class="container">
          <div class="logo">
<p><img src="imagenes/pls.png" width="250px" height=""></p>
           </div>

  </div></center>

</header>
 
     <br><br><br><br>

	<center>
	

 <div class="fila">
        <div class="columna">
            <img src="imagenes/juegos/cr.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/ctr.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/tr.png"  height="300px">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <img src="imagenes/juegos/mg.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/sh.jpg"  height="300px">
        </div>
        <div class="columna">
            <img src="imagenes/juegos/pep.jpg"  height="300px">
        </div>
    </div>
	</center>
       
</body>
</html>