<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

</body>
</html>
<?php
echo "<pre>";
$N1 = $_POST['N1'];
$N2 = $_POST['N2'];
$N3 = $_POST['N3'];
$N4 = $_POST['N4'];
$N5 = $_POST['N5'];
$N6 = $_POST['N6'];
$N7 = $_POST['N7'];
$N8 = $_POST['N8'];
$N9 = $_POST['N9'];
$N10 = $_POST['N10'];

print_r($_POST);

$numeros = [$N1, $N2, $N3, $N4, $N5, $N6, $N7, $N8, $N9, $N10];

echo "<hr>";
echo "Datos ingresados :<br>";

$suma =0;

foreach($numeros as $valor){
	$suma+=$valor;
	echo $valor." ";

}
echo "<br><br>";
echo "La suma de los elementos del vector es : <b>$suma</b><br>";

$raiz_cuadrada = sqrt($suma);
echo "La raíz cuadrada de la suma hallada es: ".round($raiz_cuadrada,2);
echo "<br><br>";

echo "<hr>";

$mayor = -9999;
foreach($numeros as $llave => $valor){
	if ($valor > $mayor){
		$mayor = $valor;
	}
}
echo "El número mayor del vector es <b>$mayor</b><br>";

$mayor2 = max($numeros);
echo "El número mayor del vector es :".$mayor2;
echo "<hr>";

$cubo_mayor = pow($mayor,3);
echo "El cubo del número mayor es : $cubo_mayor";
echo "<hr>";

$menor = 9999999;
foreach ($numeros as $llave => $valor) {
	if ($valor < $menor){
		$menor = $valor;
	}
}

echo "El número menor del vector es <b>$menor</b><br>";

$menor2 = min($numeros);
echo "El número menor del vector es: ".$menor2;

echo "<br> <h3>¡Aplicando algunas funciones matemáticas!</h3>";

$valorabsoluto_menor = abs($menor);
echo "<br>El valor absoluto del número menor es :".$valorabsoluto_menor;




?>