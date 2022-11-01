<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>IMC</title>
</head>
<style>
body {
  background-image: url('https://i.gifer.com/slo.gif');
  background-size: cover;
  color:white;
  font-weight: 700;
}
</style>
<body>
	<center><h1><font color="white">IMC Calculado</font></h1></center>
	<hr width="70%" color="red">

</body>
</html>
<?php

$peso = $_POST["peso"];
$estatura = $_POST["estatura"];

$IMC = $peso / pow($estatura, 2);

if ($IMC < 15) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Delgadez muy severa, puedes tener anemia.";
}elseif ($IMC >= 15 && $IMC <=15.9) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Delgadez severa, podrías tener algún tipo de enfermedad.";
}elseif ($IMC >= 16 && $IMC <=18.4) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Su estado es delgado, no posee complicaciones.";
}elseif ($IMC >= 18.5 && $IMC <=24.9) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Usted es una persona saludable.";
}elseif ($IMC >= 25 && $IMC <=29.9) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Tiene sobrepeso, posible alarma.";
}elseif ($IMC >= 30 && $IMC <=34.9) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Tiene obesidad moderada, intente cuidarse más.";
}elseif ($IMC >= 35 && $IMC <=39.9) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Tiene obesidad severa, con este peso usted es más propenso a sufrir problemas cardiovasculares.";
}elseif ($IMC >= 40) {
	echo "<center><h3>El IMC registrado es de ".$IMC.".<br>Tiene obesidad morbida, debe reformarse por completo o no sobrevivirá mucho.";}
	else{
		echo "No ingresó datos";
	}


?>