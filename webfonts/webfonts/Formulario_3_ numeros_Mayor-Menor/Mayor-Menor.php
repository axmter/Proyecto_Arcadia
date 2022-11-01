<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<title></title>
</head>
<body>
</body>
</html>
<?php

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];

echo "<hr>";

echo "Los datos almacenados son: <br>";

echo "Número 1 = $num1 <br>";
echo "Número 2 = $num2 <br>";
echo "Número 3 = $num3 <br><br>";

$mayor=0;

if (($num1>$num2) and ($num1>$num3)) {
	echo "El número mayor es $num1 <br>";
}elseif (($num2>$num1) and ($num2>$num3)){
	echo "El número mayor es $num2 <br>";
}elseif (($num3>$num1) and ($num3>$num2)){
	echo "El número mayor es $num3 <br>";
}elseif (($num1>$num2) and ($num1>$num3)) {
	echo "El número mayor es $num1 <br>";
}elseif (($num2>$num1) and ($num2>$num3)){
	echo "El número mayor es $num2 <br>";
}elseif (($num3>$num1) and ($num3>$num2)){
	echo "El número mayor es $num3 <br>";
}elseif (($num1==$num2) and ($num1>$num3)){
	echo "Los números mayores son $num1 y $num2<br>";
}elseif (($num2==$num3) and ($num2>$num1)){
	echo "Los números mayores son $num2 y $num3<br>";
}elseif (($num3==$num1) and ($num3>$num2)){
	echo "Los números mayores son $num3 y $num1<br>";
}else{
	echo "Todos son iguales";
}

echo "<br>";

if (($num1<$num2) and ($num1<$num3)) {
	echo "El número menor es $num1 <br>";
}elseif (($num2<$num3) and ($num2<$num1)) {
	echo "El número menor es $num2 <br>";
}else{ 
	echo "El número menor es $num3 <br>";
}

?>	
	

