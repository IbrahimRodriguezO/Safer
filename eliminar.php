<?php
include "conexion.php";

$id=$_GET['id_cliente'];

$eliminar="DELETE FROM cliente WHERE id_cliente='".$id."'";

$resultado = mysqli_query($conexion, $eliminar);

header("Location:crud.php");

?>