<?php
    session_start();
    if(isset($_SESSION['intentos'])){
      if($_SESSION['intentos']>=3){
        echo '<script>
          alert("Agotaste tus intentos de inicio de sesion, vuelve a intentar");
              </script>';
          $_SESSION['intentos']=0;
      }
    }
?>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Login Safer</title>
     <link rel="stylesheet" href="login.css">	
</head>
<body>
  <div class="cajafuera" align="center">
<div class="formulariocaja">

<form action = "validar.php" method="post">
<img src="media/logo.png">

<input type="text" name="user" placeholder="&#128100; Usuario" class="cajaentradatexto">

<input type="password" name="clave"
placeholder="&#128274; Password" class="cajaentradatexto">
<input type="submit" value="Iniciar sesión" class="botonenviar">
</form>
<p style="color: #fff;">¿No tienes una cuenta? <a href="agregarUS.html">Registrarte</a> <br>
<a href="login_admin.php">Administradores</a></p>


</div>
</div> 
</body>
<br>
<br>
<footer> <br><br> © 2022 Safer. Todos los derechos reservados 
</footer>
</html>