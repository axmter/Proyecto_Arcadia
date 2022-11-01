<?php
session_start();
if (isset($_SESSION["nombre"])) {
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
   <link rel="stylesheet" href="css/estilo4.css">
</head>
<body>

 <header class="header">
  <div class="container">
           <div class="logo">
               <h1>Arcadia</h1>
           </div>
           <nav class="menu">
                 <ul>
                   <li><a href="#">Inicio</a></li>
                   <li><a href="#">Ver empleados <i class="icon-abajo2"></i></a>
                   <ul class="submenu">
                       <li><a href="#">
                           Juan
                       </a></li>
                       <li><a href="#">
                           Paco
                       </a></li>
                       <li><a href="#">
                           Diana
                       </a></li>
                   </ul>
                   </li>
                   <li><a href="#">Servicios</a></li>
                   <li><a href="#"> Perfil <i class="icon-abajo2"></i></a>
                   <ul class="submenu">

                       <li><a href="cambiar.php"> Cambiar contraseña  </a></li>
                       <li><a href="frm_buscar_usuario.php"> Buscar usuarios </a></li>
                       <li><a href="cerrar_sesion.php"> Cerrar sesion </a></li>
                   </ul>
                   </li>
                   
               </ul>
           </nav>
  </div>

</header>
<br>
<br>
<br>
<br>
<br>
<br> 
<h1> Bienvenido(a), <?php echo $_SESSION['nombre']; ?><br>
<h2> MEDICO </h2> 
     <?php
       echo $_SESSION['usuario'];
       echo "<br>";
       echo "Es MEDICO";
       echo "<br>";
       echo "<br>";
       echo "<br>";
      ?>
</h1>

</body>
</html>