<?php 

echo "<pre>";
print_r ($_POST);
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$password = $_POST['password'];

echo"<hr>";
echo"los datos ingresados son: <br><br>";

echo "$nombre <br>";
echo "$correo <br>";
echo "$password";



 ?>