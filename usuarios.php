<?php
session_start();
if (isset($_SESSION['nombre'])) {

}else{
	header("Location: login.php");
	exit();
}
?>

<!DOCTYPE html>
<html>
<head lang="es">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Bienvenido</title>
   <link rel="stylesheet" href="css/estilo4.css">
</head>
<body>

	<h1>Bienvenido(a), <?php echo $_SESSION['nombre']; ?><br>
		<h2> Usuario</h2>
		
	  <?php
	  echo $_SESSION['usuario'];
	  echo "<br>";
	  echo "Es Ususario";
	  echo "<br>";
	  echo "<br>";
	  echo "<br>";

	  ?>

	</h1>

<header class="header">
  <div class="container">
           <div class="logo">
               <h1>Nacional</h1>
           </div>
           <nav class="menu">
                 <ul>
                   <li><a href="inicio.php">Inicio</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
  </div>

</header>

</body>
</html>