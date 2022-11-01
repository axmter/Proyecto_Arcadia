<?php 

session_start();
if (isset($_SESSION["usuario"]) && ($_SESSION["tipo_user"]=='Admin')) {
}else {
    header("Location:login.php");

    exit();
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido(a), <?php echo $_SESSION['nombre']; ?></title>
    <link rel="stylesheet" href="css/estilo4.css">
    <link rel="icon" href="imagenes/NA.png">
    <link rel="short icon"  href="imagenes/pildra.png">
</head>
<body>

<header class="header">
  <div class="container">
           <div class="logo">
              <img src="imagenes/ArcadiaBlue.png" width="300px" height="">
           </div>
           <nav class="menu">
                 <ul>
                   <li><a href="inicio.php">Inicio</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="cambiar_password.php"> Cambiar contraseña  </a></li>
                       <l1><a href="emuladores.php">Emuladores</a></l1>
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
                       <li><a href="subir_rom.php"> Subir ROM </a></li>
                       <li><a href="mostrar_roms.php"> Ver ROMS </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
  </div>

</header>
    <center>
        <br><br><br><br><br><br><br><br><br><br><br><br>
    <h1 style="font-size: 70px; color: cyan;"> Bienvenido(a), <?php echo $_SESSION['nombre']; ?> <br>
    <h2 style="font-size: 55px; color: cyan;"> ADMINISTRADOR </h2>
    <br><br>
    <div class="slider-container">  
   

 <a href="sony.php"><img 
    class="slider-item"
    src="imagenes/pls.png"
    width="250px"
     
    /></a>
<a href="nintendo.php"><img

    class="slider-item"
    src="imagenes/n.png"
    width="250px"
     
  /></a>
  
<a href="sega.php"><img
    class="slider-item"
    src="imagenes/se.jpg"
    width="250px"
     
  /></a>
<a href="atari.php"><img
    class="slider-item"
    src="imagenes/at.png"
    width="250px"
     
  /></a>


</div>  



    </h1>
    
    <!--<a href="cerrar_sesion.php" class="cerrar">Cerrar Sesion</a>-->
    </center>
</body>
</html>