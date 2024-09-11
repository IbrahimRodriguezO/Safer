<?php
include "conexion.php";

$id=$_GET['id'];

$eliminar="DELETE FROM compra WHERE id='".$id."'";

$resultado = mysqli_query($conexion, $eliminar);

header("Location:crud_compra.php");

?>