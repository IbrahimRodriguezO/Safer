<?php
include "conexion.php";

$cliente=$_POST['cliente'];

$consulta = "SELECT * FROM compra where id_cliente = '$cliente'";

$resultado = mysqli_query($conexion, $consulta);

$encontrado = mysqli_num_rows ($resultado);

if($encontrado == 0){
    echo "No existe compra registrada con esa compra";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD usuarios</title>
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosCRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class = "inicio">

<h1>RESULTADOS</h1>
<p><a href="crud_compra.php">Regresar</a></p>

        <table class = "table" align = "center">
            <thead>
                <tr>
                    <th>Id de transaccion</th>
                    <th>Fecha</th>
                    <th>Estatus</th>
                    <th>Correo</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Opciones</th>
                
                    
                </tr>
            </thead>
            <tbody>
                <?php
                 while($filas=mysqli_fetch_array($resultado)){

                        ?>
                        <tr>
                            <td><?php echo $filas['id_transaccion'] ?> </td>
                            <td><?php echo $filas['fecha'] ?> </td>
                            <td><?php echo $filas['status'] ?> </td>
                            <td><?php echo $filas['correo'] ?> </td>
                            <td><?php echo $filas['id_cliente'] ?> </td>
                            <td><?php echo $filas['total'] ?> </td>
                    
                            <td>
                            <a class = "text-success" href="editar_compra.php?id=<?php echo $filas['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                            <a class = "text-danger" onclick="return confirm('¿Estás seguro de eliminar?');" href="eliminar_compra.php?id=<?php echo $filas['id'] ?>"><i class="bi bi-trash"></i></a>
                               
                            </td>
                        </tr>
                <?php
                } 
            ?>
            </tbody>
        </table>
    </div>

    <script>

    </script>
 <!-- Bootstrap JavaScript Libraries -->
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

