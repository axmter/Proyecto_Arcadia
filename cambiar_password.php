<?php

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:login.php");

    exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cambiar Password</title>
	<link rel="stylesheet" type="text/css" href="css/estilo9.css">
	<script type="text/javascript">
		function comprobarClave(){
            clave1 = document.f1.clave1.value
            clave2 = document.f1.clave2.value
		
		if (clave1 == clave2) {
           alert("Se cambió la clave correctamente");
		else
		   alert("Las contraseñas no coinciden, intenta nuevamente");
	}exit();
}
		
	</script>
</head>
<body>
	<center>

<form method="post" action="cambiarpass.php" name="f1">
    <h1> Nueva contraseña</h1>
    <input type="password" name="clave1">
    <h1> Confirmar contraseña </h1>
    <input type="password" name="clave2">
    <br><br>
    <input type="submit" name="" value="Cambiar" onclick="comprobarClave()">
</form>
</center>

</body>
</html>