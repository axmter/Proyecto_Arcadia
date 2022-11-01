<?php
session_start();
if (isset($_SESSION["usuario"])) {
//si no existe, va a la página de autenticacion
//echo $_SESSION["Nombre"];
}else{
  header("Location:login.php");
//salimos de este script
exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title> Bienvenido</title>
  <meta charset="utf-8">
   <link rel="stylesheet" href="css/estilo4.css">
   <link rel="icon" href="imagenes/NA.png">
  <link rel="short icon"  href="imagenes/pildra.png">
</head>
<body>

 <header class="header">

  

  <div class="container">
           <div class="logo">
<p><img src="imagenes/ArcadiaBlue.png" width="300px" height=""></p>
           </div>
           <nav class="menu">
                 <ul>
                   <li><a href="inicio.php">Inicio</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
                       <li><a href="emuladores.php"> Emuladores </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
  </div>

</header>

</header>
<br>
<br>
<br>
<br>
<br>
<br> 
   <center>
        <br><br><br><br><br><br><br>
<h1 style="font-size: 90px; color: cyan;"> Bienvenido(a), <?php echo $_SESSION['usuario']; ?> <br>
    <h3 style="font-size: 70px; color: cyan;"> ¿Qué deseas jugar hoy? </h2>
     <br><br><br>

</h1>

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