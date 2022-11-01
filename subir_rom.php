<!DOCTYPE html>
<html lang="es">
<head>
	<title> Subir ROM</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<link rel=""  href="imagenes/pildora.gif">
	<link rel="short icon"  href="imagenes/pildora.gif">
	 <style type="text/css">
            .imag{
              position: absolute;
              left: 500px;
              top: 110px;

            }

      </style>
</head>
<body>

<a href="inicio.php"><img style="display: block; margin: auto;" src="imagenes/Arcadiared.png" width="500px"></a>
		<h1> <center> SUBIR ROM</center> </h1>
<div class="formulario_registro">
	<div class="form">
				

	   <form action="cargar_rom.php" method="post" enctype="multipart/form-data">
	   	<p>
	   	Nombre 		
	   	<input type="text" name="nombre" placeholder="Nombre" class="field">	
	   	</p>
	   	<p>
	   	Consola
	   	<input type="text" name="consola" placeholder="Consola" class="field">	
	   	</p>
	   	<p>
	   	Género
	   	<input type="text" name="genero" placeholder="Género" class="field">	
	   	</p>
	   	<p>
	   	Archivo
	   	<input type="file" name="archivo" placeholder="Ingresar ROM" class="field">
	    </p>
	    <p>
	    Imagen
	    <input type="file" name="img" placeholder="Ingresar imagen" class="field">
	    </p>	
	   	<p>
	   	Desc.
	   	<input type="text" name="descr" placeholder="Descripción" class="field">	
	   	</p><br>
	     <input type="submit" name="" value="Subir" class="btn-green"> <br>
	   </form>
       <br>
       
  </div>
</div>


</body>
</html>