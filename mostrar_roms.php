<?php

include "conexion.php";

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:login.php");

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
		<link rel="stylesheet" type="text/css" href="css/estilo10.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Roms</title>
</head>
<body>
<center>
	<nav>
		<h2>Mostrar roms</h2>
	</nav>

	<div class="main-container">
		<table>
			<tr>
				<th> NOMBRE</th>
				<th> CONSOLA</th>
				<th> GÉNERO</th>
				<th> ARCHIVO</th>
				<th> DESCRIPCION</th>
				<th> IMAGEN</th>
			</tr>

			<?php
			$consulta = "SELECT * FROM roms";
			$resultado = mysqli_query($conexion, $consulta);

			while ($mostrar = mysqli_fetch_array($resultado)){
			?>	
			<tr>
				
				<td><?php echo $mostrar['nombre']; ?></td>
				<td><?php echo $mostrar['consola']; ?></td>
				<td><?php echo $mostrar['genero']; ?></td>
				<td><?php echo "<a href=/PROYECTO_Arcadia/ROMS/".$mostrar['archivo'].">".$mostrar['archivo']."</a>"; ?></td>
				<td><?php echo $mostrar['descr']; ?></td>
				<td align="center"><?php echo "<img src=".$mostrar['img']." width=200px height=150px>"; ?></td>
			</tr>
				
   	     


			<?php
		}
		?>
			


			
		</table>
    </div>


</body>
</html>