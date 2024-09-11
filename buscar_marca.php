<?php
include "conexion.php";

$marca=$_POST['marca'];

$consulta = "SELECT * FROM autos WHERE marca='$marca'";


$resultado = mysqli_query($conexion, $consulta);

$encontrado = mysqli_num_rows ($resultado);

if($encontrado == 0){
    echo "No existe marca registrado";
}
?>

<h1>Resultado</h1>
<a href="crudinventario.php">Regresar</a>
<?php while($filas=mysqli_fetch_array($resultado)){

?>

<link rel="stylesheet" href="estilosCRUD.css">
<table class="table">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                </tr>
            </thead>
            <tbody>
                <tr>
    <td><?php echo $filas['marca'] ?> </td>
    <td><?php echo $filas['modelo'] ?> </td>
    <td><?php echo $filas['descripcion'] ?> </td>
    <td><?php echo $filas['precio'] ?> </td>
    <td><?php echo $filas['activo'] ?> </td>
            </tr>
</tbody>
</table>
<?php
} ?>
<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>