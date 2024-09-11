<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$fecha=$_POST["año"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$genero=$_POST["genero"];
$pais=$_POST["pais"];
$rol=$_POST["rol"];
$user=$_POST["user"];
$clave=$_POST["clave"];


$id2=$_POST["id_admin"];

$actualizar = "UPDATE administradores SET nombre= '$nombre',  paterno= '$paterno',  materno='$materno', fecha_nac ='$fecha', correo='$correo', telefono='$telefono', genero='$genero',  pais=' $pais', rol='$rol', usuario='$user', clave='$clave' where id_admin = '$id2' ";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado){
    echo "Error al ACTUALIZAR DATOS";
}
else{
    header("location:crudadmin.php");
}

mysqli_close($conexion);

?>