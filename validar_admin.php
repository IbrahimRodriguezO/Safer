<?php
$user=$_POST['usuario'];
$clave=$_POST['password'];
session_start();

$_SESSION['usuario']=$user;

include "conexion.php";

$consulta="SELECT * FROM administradores where usuario='$user' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:crud.php");
}else{
    ?>
      <?php
       header("location:login_admin.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);