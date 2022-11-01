<?php 

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:login.php");

    exit();
}

include "conexion.php";
$del = $_GET['del'];

if (!empty($_POST)) {
	$codusuario = $_POST['codi'];

	$query_borrar= mysqli_query($conexion, "DELETE  FROM usuarios WHERE id ='$codusuario'");
	if ($query_borrar) {
		echo '<script>
         alert("Se eliminaron los datos correctamente");
         window.location = "mostrar_usuarios.php";
         </script>';
        
	}else{
		echo "Error al eliminar";
	}
}

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id ='$del'")or die("Problemas en el select".mysqli_error($conexion));

while ($row = mysqli_fetch_array($resultado)) {
	$codigo= $row['id'];
	$nombre= $row['nombre'];
}

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eliminar datos</title>
</head>
<body>

	<center><h2 style="color: white;"> ¿Está seguro que desea eliminar el usuario 


	<?php 
	echo "Cuya ID es ".$codigo. " y nombre es ".$nombre."?";
	?>
</h2>
	<br>
	<form method="post" action="">
		<input type="hidden" name="codi" value="<?php echo "$del"; ?>">
		<input type="submit" name="" value="Aceptar">
		<a href="mostrar_usuarios.php"><input type="button" name="" value="Cancelar"></a>
	</form>

</body>
</html>