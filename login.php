<!DOCTYPE html>
<html>
<head>
	<title> Login </title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
      
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="short icon"  href="imagenes/pildora.ico">
      <style type="text/css">
            .imag{
              position: absolute;
              left: 540px;
              top: 130px;

            }

      </style>
</head>
<body>
    <a href="inicio.php"><img style=" display:block; margin:auto;" src="imagenes/ArcadiaPurple.png" width="500px" height=""></a>

 <div class="formularios">
	<form method="post" action="logear.php">

		<h1 class="title">Iniciar Sesion </h1>
              <p> Usuario</p>
                  <i class="fa-solid fa-user fa-lg" aria-hidden="true"></i> 
                  <input type="text" name="usuario" placeholder="ingresar usuario" class="field">
                  <p> Password </p> 
                  <i class="fa fa-key fa-lg" aria-hidden="true"></i>
                  <input type="password" name="password" placeholder="********" class="field">
                  <br><br>
                  <p class="center-content">
                  <input type="submit" name="" value="Iniciar Sesion" class="btn btn-green">
                  <br><br>
             <a href="formulario_registro.php"> Olvidaste tu cuenta</a>
             <b>|</b>
             <a href="formulario_user.php"> Registrar cuenta </a>

            </p>
      </form>
			
 </div>
</body>
</html>


