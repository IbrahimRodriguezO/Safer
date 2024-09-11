<?php
include "conexion.php";

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$estatus=$_POST['estatus'];

$id2=$_POST["id"];

$actualizar = "UPDATE autos SET marca= '$marca',  modelo= '$modelo',  descripcion = '$descripcion',precio='$precio', activo = '$estatus'
where id = '$id2' ";

$resultado = mysqli_query($conexion, $actualizar);

if(!$resultado){
    echo "Error al ACTUALIZAR DATOS";
}
else{
    header("location:crudinventario.php");
}

mysqli_close($conexion);

?>