<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pago</title>
</head>
<body>

</body>
</html>
<?php 

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$Departamento = $_POST['Departamento'];
$codpostal = $_POST['codpostal'];
$tarj = $_POST['tarj'];
$tarjnum = $_POST['tarjnum'];
$tarjmes = $_POST['tarjmes'];
$tarjcad = $_POST['tarjcad'];
$cvv = $_POST['cvv'];

echo "<pre>";
print_r($_POST);

echo "<br><br><hr>";
if ($ciudad == "medellin") {
	echo "Le llegará un correo a $email cuando se confirme la compra, tiene un 30% de descuento debido a su localización.";
}else{
	echo "Le llegará un correo a $email cuando se confirme la compra.";
}