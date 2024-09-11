<?php
include "conexion.php";

$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$ocupacion=$_POST['ocupacion'];
$pais=$_POST['pais'];
$user=$_POST['user'];
$clave=$_POST['clave'];

$insertar = ("INSERT INTO cliente (id_cliente, nombre, paterno, materno, correo, telefono, genero, ocupacion, pais) VALUES ('', '$nombre', '$paterno', '$materno', '$correo', '$telefono', '$genero', '$ocupacion', '$pais')");
$resultado = mysqli_query($conexion, $insertar);

$id_cliente=mysqli_insert_id($conexion);

$insertar2 = ("INSERT INTO usuario (id_usuario, usuario, clave, id_cliente) VALUES ('', '$user', '$clave', '$id_cliente')");
$resultado = mysqli_query($conexion, $insertar2);

if (!$resultado){
    echo "Error al ingresar los datos"; 
}else{
    echo "<br><br> Almacenamiento correcto de la informacion"; ?>
    <?php
    header("Location:login.php");
    ?>
    <?php
}
mysqli_close($conexion);

?>