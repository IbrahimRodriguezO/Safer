<?php
include "conexion.php";

$id=$_GET['id_admin'];

$eliminar="DELETE FROM administradores WHERE id_admin='".$id."'";

$resultado = mysqli_query($conexion, $eliminar);

header("Location:crudadmin.php");

?>