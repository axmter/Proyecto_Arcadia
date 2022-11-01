<?php
echo "<pre>";
print_r ( $_POST);

$numero = $_POST['numero'];


echo "<hr>";
echo "<b>Calculando el factorial: </b> <br><br>";

$fac=1;
if($numero < 0){
	echo "<b> el factorial de un número negativo no existe</b> ";
}elseif ($numero == 0 or $numero == 1){
	echo "El factorial de $numero es : $fac";
}elseif($numero > 0){
	for($i=1;$i<=$numero;$i++):

	$fac*=$i;

endfor;
echo "El factorial es : $fac";
}