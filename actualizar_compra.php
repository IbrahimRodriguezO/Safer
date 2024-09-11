<?php
include "conexion.php";

$transaccion=$_POST['transaccion'];
$fecha=$_POST['fecha'];
$status=$_POST['status'];
$correo=$_POST['correo'];
$cliente=$_POST['id_cliente'];
$total=$_POST['total'];

$id2=$_POST["id"];

$actualizar = "UPDATE compra SET id_transaccion= '$transaccion',  fecha= '$fecha',  status='$status',  correo='$correo', id_cliente='$cliente', 
total='$total' where id = '$id2' ";

$resultado = mysqli_query($conexion, $actualizar);



if(!$resultado){
    echo "Error al ACTUALIZAR DATOS";
}
else{
    echo "<br><br> SE ACTUALIZARON LOS DATOS CORRECTAMENTE";
    header("location:crud_compra.php");
}

mysqli_close($conexion);

?>