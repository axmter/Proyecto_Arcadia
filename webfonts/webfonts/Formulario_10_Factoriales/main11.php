<?php  
echo "<pre>";
$N1 = $_POST["N1"];
$N2 = $_POST["N2"];
$N3 = $_POST["N3"];
$N4 = $_POST["N4"];
$N5 = $_POST["N5"];
$N6 = $_POST["N6"];
$N7 = $_POST["N7"];
$N8 = $_POST["N8"];
$N9 = $_POST["N9"];
$N10 = $_POST["N10"];

print_r($_POST);

$factoriales =[$N1,$N2,$N3,$N4,$N5,$N6,$N7,$N8,$N9,$N10];

echo "<hr>";
echo "<b>calculando los factoriales de los numeros del vector :</b> <br><br>";

foreach ($factoriales as $indice => $dato) {
	
	$fac=1;
	if ($dato < 0) {
		echo "<b> el factorial de un numero negativo no existe</b><br>";
	}elseif ($dato == 0 or $dato == 1) {
		echo "el factorial de $dato es : $fac <br> ";
	}elseif ($dato > 0){
		
		for($i=1;$i<=$dato;$i++):

			$fac*=$i;

	endfor;
	echo "el factorial de $dato es : $fac <br>";
	}
}














?>