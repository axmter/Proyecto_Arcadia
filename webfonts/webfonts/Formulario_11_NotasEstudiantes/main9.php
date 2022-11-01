<?php

echo "<pre>";

$e1 = $_POST["e1"];
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];
$n4 = $_POST['n4'];
$n5 = $_POST['n5'];

$e2 = $_POST["e2"];
$n6 = $_POST['n6'];
$n7 = $_POST['n7'];
$n8 = $_POST['n8'];
$n9 = $_POST['n9'];
$n10 = $_POST['n10'];

$e3 = $_POST["e3"];
$n11 = $_POST['n11'];
$n12 = $_POST['n12'];
$n13 = $_POST['n13'];
$n14 = $_POST['n14'];
$n15 = $_POST['n15'];

$e4 = $_POST["e4"];
$n16 = $_POST['n16'];
$n17 = $_POST['n17'];
$n18 = $_POST['n18'];
$n19 = $_POST['n19'];
$n20 = $_POST['n20'];


$e5 = $_POST["e5"];
$n21 = $_POST['n21'];
$n22 = $_POST['n22'];
$n23 = $_POST['n23'];
$n24 = $_POST['n24'];
$n25 = $_POST['n25'];

$e6 = $_POST["e6"];
$n26 = $_POST['n26'];
$n27 = $_POST['n27'];
$n28 = $_POST['n28'];
$n29 = $_POST['n29'];
$n30 = $_POST['n30'];

$e7 = $_POST["e7"];
$n31 = $_POST['n31'];
$n32 = $_POST['n32'];
$n33 = $_POST['n33'];
$n34 = $_POST['n34'];
$n35 = $_POST['n35'];

$e8 = $_POST["e8"];
$n36 = $_POST['n36'];
$n37 = $_POST['n37'];
$n38 = $_POST['n38'];
$n39 = $_POST['n39'];
$n40 = $_POST['n40'];

$e9 = $_POST["e9"];
$n41 = $_POST['n41'];
$n42 = $_POST['n42'];
$n43 = $_POST['n43'];
$n44 = $_POST['n44'];
$n45 = $_POST['n45'];

$e10 = $_POST["e10"];
$n46 = $_POST['n46'];
$n47 = $_POST['n47'];
$n48 = $_POST['n48'];
$n49 = $_POST['n49'];
$n50 = $_POST['n50'];

print_r($_POST);

$calificaciones =[
[ "nombre" => [$e1],
"notas" => [$n1,$n2,$n3,$n4,$n5]
],
[ "nombre" => [$e2],
  "notas" => [$n6,$n7,$n8,$n9,$n10]
],
[ "nombre" => [$e3],
   "notas" => [$n11,$n12,$n13,$n14,$n15]
],
[ "nombre" => [$e4],
  "notas"  => [$n16,$n17,$n18,$n19,$n20]
],
[ "nombre" => [$e5],
  "notas" => [$n21,$n22,$n23,$n24,$n25]
],
[  "nombre" => [$e6],
   "notas" =>  [$n26,$n27,$n28,$n29,$n30]
],
[  "nombre" => [$e7],
   "notas"  => [$n31,$n32,$n33,$n34,$n35]
],
[   "nombre" => [$e8],
    "notas"  => [$n36,$n37,$n38,$n39,$n40]
],
[   "nombre" => [$e9],
    "notas"  => [$n41,$n42,$n43,$n44,$n45]
],
[  "nombre" => [$e10],
   "notas"  => [$n46,$n47,$n48,$n49,$n50]
]
];

echo "<hr>";
$cont=1;
$suma =0;
$promedio=0;
for ($i=0; $i<count($calificaciones);$i++) { 
	echo "<b>El nombre del estudiante $cont es:</b>
	{$calificaciones[$i]["nombre"][0]} <br><br>";

	echo "sus notas son: <br>";
	$ne = $calificaciones[$i]["notas"];

	foreach ($ne as $valor) {
		echo "$valor <br>";
		$suma += $valor;
	};
	$cont += 1;
	$promedio = $suma / 5;
	$suma =0;
	echo "El Promedio de las notas del estudiante : $promedio";

	$nota =$promedio;
	//Evaluamos el cobncepto del docente 
	switch($nota){
		case ($nota > 4.5):
		echo "<h1> Tienes una nota excelente </h1>";
		break;

		case($nota >4):
		echo "<h1> Tienes una nota sobresaliente </h1>";
		brak;

		case($nota >=3.5);
		echo "<h1>Tienes una calificacio notable </h1>";

		case ($nota >=3);
		 	echo "<h1>Tienes un concepto de : aprobado </h1>";
		 	break;

		 	case (($nota >= 2) && ($nota < 3)):
		 	echo "<h3> Tienes un concepto de reprobo </h3>";
		 	 	break; 

		 	 case (($nota >= 1)&& ($nota < 2)):
		 	 echo "<h3> Tu nota es : insuficiente </h3>";
		 	 break;

		 	 case (($nota >= 0) && ($nota < 1 )):
		 	 	echo "<h3> Tu nota es: Deficiente";
		 	 	break;

		 	 	default:
		 	 	echo "<h1> Por favor Ingrese una nota valida </h1>";
	}

	echo "<hr>";
}


?>