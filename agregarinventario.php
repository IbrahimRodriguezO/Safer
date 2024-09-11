<?php
include "conexion.php";

$marca=$_POST['marca'];
$modelo=$_POST['modelo'];
$descripcion=$_POST['descripcion'];
$precio=$_POST['precio'];
$estatus=$_POST['estatus'];

$insertar = ("INSERT INTO autos (id, marca, modelo, descripcion, precio, activo) VALUES ('', '$marca', '$modelo', '$descripcion', '$precio', '$estatus')");

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo "Error al ingresar los datos"; 
}else{
    echo "<br><br> Almacenamiento correcto de la informacion"; ?>
    <?php
    header("Location:crudinventario.php")
    ?>
    <?php
}
mysqli_close($conexion);

?>
