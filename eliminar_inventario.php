<?php
include "conexion.php";

$id=$_GET['id'];

$eliminar="DELETE FROM autos WHERE id='".$id."'";

$resultado = mysqli_query($conexion, $eliminar);

header("Location:crudinventario.php");

?>