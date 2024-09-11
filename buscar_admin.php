<?php
include "conexion.php";

$genero=$_POST['genero'];

$consulta = "SELECT * FROM administradores WHERE genero='$genero'";

$resultado = mysqli_query($conexion, $consulta);

$encontrado = mysqli_num_rows ($resultado);

if($encontrado == 0){
    echo "No existe usuarios registrado con ese genero";
}
?>

<link rel="stylesheet" href="estilosCRUD.css">
<table class="table" align="center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Año de nacimiento</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Género</th>
                    <th>Rol</th>
                    <th>Usuario</th>
                </tr>
            </thead>
            <tbody><h1>Resultado</h1>
            <a href="crudadmin.php">Regresar</a>

            <?php while($filas=mysqli_fetch_array($resultado)){

                        ?>
                        <tr>
                            <td><?php echo $filas['nombre'] ?> </td>
                            <td><?php echo $filas['paterno'] ?> </td>
                            <td><?php echo $filas['materno'] ?> </td>
                            <td><?php echo $filas['fecha_nac'] ?> </td>
                            <td><?php echo $filas['correo'] ?> </td>
                            <td><?php echo $filas['telefono'] ?> </td>
                            <td><?php echo $filas['genero'] ?> </td>
                            <td><?php echo $filas['rol'] ?> </td>
                            <td><?php echo $filas['usuario'] ?> </td>
                        </tr>
                <?php
                } ?>
            </tbody>
        </table>
<?php
?>
<?php
mysqli_free_result($resultado);
mysqli_close($conexion);
?>