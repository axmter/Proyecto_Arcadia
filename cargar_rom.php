<?php 

include "conexion.php";

$nombre = $_POST['nombre'];
$consola = $_POST['consola'];
$genero = $_POST['genero'];
$archivo = $_FILES['archivo']['name'];
//$ruta = $_FILES['archivo']['tmp_name'];
$carpeta=$_SERVER['DOCUMENT_ROOT'].'/PROYECTO_Arcadia/ROMS/';
move_uploaded_file($_FILES['archivo']['tmp_name'],$carpeta.$archivo);
$descr= $_POST['descr'];
$img = $_FILES['img']['name'];
$ruta = $_FILES['img']['tmp_name'];
$destino = "imagenes/".$img;


copy($ruta, $destino);

mysqli_query($conexion, "INSERT INTO roms(nombre,consola,genero,archivo,descr,img) VALUE('$nombre','$consola','$genero','$archivo','$descr','$destino')");






header("location:mostrar_roms.php");
?>