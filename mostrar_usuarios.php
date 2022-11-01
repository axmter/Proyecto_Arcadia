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
	<title>Mostrar Usuarios</title>
</head>
<body>
<center>
	<nav>
		<h2>Mostrar Usuarios</h2>
	</nav>

	<div class="main-container">
		<table>
			<tr>
				<th> ID</th>
				<th> NOMBRE</th>
				<th> APELLIDO</th>
				<th> USUARIO</th>
				<th> PASSWORD</th>
				<th> TIPO DE USUARIO</th>
				<th colspan="2">BOTONES DE ACCIÓN</th>
			</tr>

			<?php
			$consulta = "SELECT * FROM usuarios";
			$resultado = mysqli_query($conexion, $consulta);

			while ($mostrar = mysqli_fetch_array($resultado)){
			?>	
			<tr>
				<td><?php echo $mostrar['id']; ?></td>
				<td><?php echo $mostrar['nombre']; ?></td>
				<td><?php echo $mostrar['apellidos']; ?></td>
				<td><?php echo $mostrar['usuario']; ?></td>
				<td><?php echo $mostrar['password']; ?></td>
				<td><?php echo $mostrar['tipo_user']; ?></td>
				<td>	<a href="modificar.php?edit=<?php echo $mostrar['id'] ?>" class="edit_btn"> Actualizar</a>

					<a href="eliminar.php?del=<?php echo $mostrar['id'];?>" class="del_btn"> Eliminar</a></td>


			<?php
		}
		?>
			


			
		</table>
    </div>


</body>
</html>