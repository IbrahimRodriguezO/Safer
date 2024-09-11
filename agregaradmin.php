<?php
include "conexion.php";

$nombre=$_POST['nombre'];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$fecha=$_POST['fecha'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$pais=$_POST['pais'];
$rol=$_POST['rol'];
$user=$_POST['user'];
$clave=$_POST['clave'];


$insertar = ("INSERT INTO administradores (id_admin, nombre, paterno, materno, fecha_nac, correo, telefono, genero, pais, rol, usuario, clave ) VALUES ('', '$nombre', '$paterno', '$materno', '$fecha', '$correo', '$telefono', '$genero', '$pais', '$rol', '$user', '$clave')");

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo "Error al ingresar los datos"; 
}else{
    echo "<br><br> Almacenamiento correcto de la informacion"; ?>
    <?php
    header("Location:crudadmin.php")
    ?>
    <?php
}
mysqli_close($conexion);

?>