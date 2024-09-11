<?php
include "conexion.php";
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
    <?php
    $sql = "SELECT * FROM compra";
    $datos = mysqli_query($conexion, $sql);
    ?>


     <div class = "panel">
        <h1>PANEL DE CONTROL - SAFER COMPANY</h1>
     </div>
      

      <div class="crud">
        <nav>
        <a href="crud.php">Usuarios</a>
        <a href="crudadmin.php">Administradores</a>
        <a href="crudinventario.php">Inventario</a>
        <a href="crud_compra.php">Compras</a>
        <a onclick="return confirm('¿Cerrar sesión?');" href="index.html">Cerrar sesión</a>
        </nav>
      </div>

      
   <div class="titulo"><h2>COMPRAS</h2></div> 

      <div class= "busqueda">
  <form action="buscar_compra.php" method="post">
    <input type="text" placeholder="Buscar por cliente" name="cliente"> <button class="submit"><i class="bi bi-search"></i></button>
  </form>
  </div>

    <div class = "enlace">
        <p class = "link"><a href="agregar_compra.html" class="alta">Nueva compra</a>  <a href="PDFcompra.php">Descargar registros</a></p>
</div>
<div>

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
                 while($filas=mysqli_fetch_array($datos)){

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

