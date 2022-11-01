<?php
include "conexion.php";

session_start();

$id = $_SESSION['id'];
if (isset($_SESSION['usuario'])){

}else{
	header("location:login.php");
	exit();
}

$pass1 = $_POST['clave1'];
$pass2 = $_POST['clave2'];

if ($pass1 == $pass2) {
	mysqli_query($conexion, "UPDATE usuarios SET password = '$pass2' WHERE id = '$id'") or die (mysqli_error());
	header("location:login.php");
}else{
   header("location:cambiar_password.php");
}


?>