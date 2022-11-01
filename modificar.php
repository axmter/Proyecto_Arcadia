<?php

include "conexion.php";

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:login.php");

    exit();
}

$edit = $_GET['edit'];

echo $edit;

	$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id = '$edit'") or die("Problemas en el select". mysqli_error($conexion));

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Modificar</title>
	<link rel="stylesheet" type="text/css" href="css/estilo5.css">
	<link rel="short icon"  href="imagenes/pildra.png">
</head>
<body>

	<nav>
		<center><h1 style="color: #E7E7E7 ;"> Actualizar datos del usuario </h1><br><br><br><br>
	</nav>	

	<form method="post" action="actualizar.php">

		<?php
         while ($row = mysqli_fetch_array($resultado)) {
            
         	echo " <div align=center><label> Nombre </label>";
         	echo " <div align=center><input type='text' name='nombre' value='$row[nombre]'></div><br>";
            
         	echo " <div align=center><label> Apellido </label>";
         	echo " <div align=center><input type='text' name='apellido' value='$row[apellidos]'></div><br>";         	
            
         	echo " <div align=center><label> Usuario </label>";
         	echo " <div align=center><input type='text' name='usuario' value='$row[usuario]'></div><br>";
            
         	echo " <div align=center><label> Password </label>";
         	echo " <div align=center><input type='text' name='password' value='$row[password]'></div><br>";
            
         	echo " <div align=center><label > Tipo de Usuario </label>";
         	echo " <div align=center><input type='text' name='tipo_user' value='$row[tipo_user]'></div><br>";

         }


		?>

		<input type="hidden" name="codigo" value="<?php echo $edit;?>">
		<input type="submit" name="" value="Aceptar" class="edit_btn">
		<button class="del_btn"> <a href="mostrar_usuarios.php">Cancelar</a></button>

</body>
</html>

