<?php
include "conexion.php";

$genero=$_POST['genero'];

$consulta = "SELECT cl.id_cliente, cl.nombre, cl.paterno, cl.materno, cl.correo, cl.telefono, cl.genero, cl.ocupacion, cl.pais, us.usuario
FROM cliente as cl
INNER JOIN usuario as us on cl.id_cliente = us.id_cliente where genero = '$genero'";

$resultado = mysqli_query($conexion, $consulta);

$encontrado = mysqli_num_rows ($resultado);

if($encontrado == 0){
    echo "No existe usuarios registrado con ese genero";
}
?>

<head>
    <link rel="stylesheet" href="estiloCRUD.css">
</head>
<h1>RESULTADOS</h1>
<p><a href="crud.php">Regresar</a></p>
<table class="table" align="center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Género</th>
                    <th>Pais</th>
                    <th>Ocupacion</th>
                    <th>Usuario</th>
                
                    
                </tr>
            </thead>
            <tbody>
               
            <?php while($filas=mysqli_fetch_array($resultado)){

                        ?>
                        <tr>
                            <td><?php echo $filas['nombre'] ?> </td>
                            <td><?php echo $filas['paterno'] ?> </td>
                            <td><?php echo $filas['materno'] ?> </td>
                            <td><?php echo $filas['correo'] ?> </td>
                            <td><?php echo $filas['telefono'] ?> </td>
                            <td><?php echo $filas['genero'] ?> </td>
                            <td><?php echo $filas['pais'] ?> </td>
                            <td><?php echo $filas['ocupacion'] ?> </td>
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