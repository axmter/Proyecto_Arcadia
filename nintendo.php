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
	<title>Juegos de Nintendo</title>
	<link rel="stylesheet" href="css/estilo11.css">
</head>
<body>
	<center>
		<h1><img

    src="imagenes/n.png"
    width="300px"
     
  /></h1>

 <div class="fila">
        <div class="columna">
            <a href="ROMSPG/TLOZ_OOT.php">
            <img src="imagenes/juegos/ZeldaOoT.jpg" height="350px"></a>
        </div>
        <div class="columna">
            <a href="ROMSPG/SM64.php">
            <img src="imagenes/juegos/Mario64.webp" height="350px"></a>
        </div>
        <div class="columna">
            <a href="ROMSPG/DBAA.php">
            <img src="imagenes/juegos/dbaa.jpg" height="350px">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <a href="ROMSPG/PKMNRF.php">
            <img src="imagenes/juegos/rojofuego.webp" height="350px"></a>
        </div>
        <div class="columna">
            <a href="ROMSPG/TLOZ_MC.php">
            <img src="imagenes/juegos/Minish.webp" height="350px">
        </div>
        <div class="columna">
            <a href="ROMSPG/TLOZ_MM.php">
            <img src="imagenes/juegos/Majoras.jpeg" height="350px">
        </div>
    </div>
    <div class="fila">
        <div class="columna">
            <a href="ROMSPG/SMB.php">
            <img src="imagenes/juegos/smb.webp" height="350px"></a>
        </div>
        <div class="columna">
            <a href="ROMSPG/DKNKM.php">
            <img src="imagenes/juegos/dknkm.jpg" height="350px">
        </div>
        <div class="columna">
            <a href="ROMSPG/SNC3.php">
            <img src="imagenes/juegos/snc3.webp" height="350px">
        </div>
    </div>
	</center>
       
</body>
</html>