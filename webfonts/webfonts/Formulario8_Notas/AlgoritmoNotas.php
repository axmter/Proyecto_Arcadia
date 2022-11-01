<!DOCTYPE html>
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

$nota = $_GET["Nota"];

if ($nota >=1 && $nota <=2.9) {echo "<center><br><br><br><br><br><br><br><br><br><br><h3>Su nota es <h1>BAJA";}
elseif ($nota >=3 && $nota <=3.9) {echo "<center><br><br><br><br><br><br><br><br><br><br><h3>Su nota es <h1>BÁSICA";}
elseif ($nota >=4 && $nota <=4.5) {echo "<center><br><br><br><br><br><br><br><br><br><br><h3>Su nota es <h1>ALTA";}
elseif ($nota >=4.6 && $nota <=5) {echo "<center><br><br><br><br><br><br><br><br><br><br><h3>Su nota es <h1>SUPERIOR";}
else{ echo "<center><br><br><br><br><br><br><br><br><br><br><h1>NOTA ERRÓNEA";}
?>

