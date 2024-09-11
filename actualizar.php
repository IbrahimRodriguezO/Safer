<?php
include "conexion.php";

$nombre=$_POST["nombre"];
$paterno=$_POST['paterno'];
$materno=$_POST['materno'];
$fecha=$_POST["año"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];
$genero=$_POST["genero"];
$ocupacion=$_POST["ocupacion"];
$pais=$_POST["pais"];

$id2=$_POST["id_cliente"];

$actualizar = "UPDATE cliente SET nombre= '$nombre',  paterno= '$paterno',  materno='$materno',  correo='$correo', telefono='$telefono', 
genero='$genero', ocupacion='$ocupacion', pais=' $pais' where id_cliente = '$id2' ";

$resultado = mysqli_query($conexion, $actualizar);



if(!$resultado){
    echo "Error al ACTUALIZAR DATOS";
}
else{
    echo "<br><br> SE ACTUALIZARON LOS DATOS CORRECTAMENTE";
    header("location:crud.php");
}

mysqli_close($conexion);

?>