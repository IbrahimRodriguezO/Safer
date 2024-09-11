<?php
$user=$_POST['user'];
$clave=$_POST['clave'];
session_start();

$_SESSION['user']=$user;

include "conexion.php";

$consulta="SELECT * FROM usuario where usuario='$user' and clave='$clave'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if ($filas){
    header("location:index2.html");
}else{
    ?>
    <?php
    header("Location:login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php

}
mysqli_free_result($resultado);
mysqli_close($conexion);