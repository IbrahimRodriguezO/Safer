<?php
include "conexion.php";

$transaccion=$_POST['transaccion'];
$fecha=$_POST['fecha'];
$status=$_POST['status'];
$correo=$_POST['correo'];
$cliente=$_POST['id_cliente'];
$total=$_POST['total'];

$insertar = ("INSERT INTO compra (id, id_transaccion, fecha, status, correo, id_cliente, total) VALUES ('', '$transaccion', '$fecha', '$status', '$correo', '$cliente', '$total')");
$resultado = mysqli_query($conexion, $insertar);

$id_cliente=mysqli_insert_id($conexion);

if (!$resultado){
    echo "Error al ingresar los datos"; 
}else{
    echo "<br><br> Almacenamiento correcto de la informacion"; ?>
    <?php
    header("Location:crud_compra.php");
    ?>
    <?php
}
mysqli_close($conexion);

?>