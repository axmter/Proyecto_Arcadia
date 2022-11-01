
<!DOCTYPE html>
<html lang="es">
<head>
	<title> Registro usuario</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">
	<link rel="short icon"  href="imagenes/pildra.png">
	 <style type="text/css">
            .imag{
              position: absolute;
              left: 500px;
              top: 110px;

            }

      </style>
</head>
<body>

	<a href="inicio.php"><img style="display: block; margin: auto;" src="imagenes/ArcadiaBlue.png" width="500px"></a>
		<h1> <center> REGISTRO USUARIO</center> </h1>

<div class="formulario_registro">
	<div class="form">
				
	   <form method="post" action="registrar_roles.php">
	   	<p>
	   	Nombre 	
	   	<input type="text" name="nombre" placeholder="Nombre" class="field">	
	   	</p>
	   	<p>
	   	Apellidos
	   	<input type="text" name="apellido" placeholder="Apellidos" class="field">	
	   	</p>
	   	<p>
	   	Usuario 
	   	<input type="text" name="usuario" placeholder="Usuario" class="field">	
	   	</p>
	   	<p>
	   	Correo
	   	<input type="email" name="correo" placeholder="Ingresar correo" class="field">
	    </p>	
	   	<p>
	   	Contraseña
	   	<input type="password" name="pass" placeholder="Contraseña" class="field">	
	   	</p><br>
	   	<center><select name="tipo_user" id="tipo_user">
            <option value="user"> Usuario </option>
            <option value="Admin"> Administrador </option>
         </select></center><br><br><br>
	     <input type="submit" name="" value="Registrar" class="btn-green"> <br>
	   	<center><a href="login.php"> Ya tengo una cuenta ? </b></a></center>
	   </form>
       <br>
       
  </div>
</div>


</body>
</html>