<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD inventario</title>
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosCRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body class = "inicio">
    <?php
    $sql = "SELECT * FROM autos";
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

      
   <div class="titulo"><h2>INVENTARIO</h2></div> 

<div class= "busqueda">
  <form action="buscar_marca.php" method="post">
    <input type="text" placeholder="Buscar por marca" name="marca"> <button class="submit"><i class="bi bi-search"></i></button>
  </form>
  </div>

    <div class = "enlace">
        <p class = "link"><a href="agregarinventario.html" class="alta">Nuevo modelo</a>  <a href="PDFautos.php">Descargar registros</a></p>
</div>
<div>

        <table class="table" align="center">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Descripción</th>
                    <th>Precio</th>
                    <th>Estatus</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($filas=mysqli_fetch_array($datos)){

                        ?>
                        <tr>
                            <td><?php echo $filas['marca'] ?> </td>
                            <td><?php echo $filas['modelo'] ?> </td>
                            <td><?php echo $filas['descripcion'] ?> </td>
                            <td><?php echo $filas['precio'] ?> </td>
                            <td><?php echo $filas['activo'] ?> </td>
                         
                            <td>
                            <a class = "text-success" href="editar_inventario.php?id=<?php echo $filas['id'] ?>"><i class="bi bi-pencil-square"></i></a>
                            <a class = "text-danger" onclick = "return confirm('¿Estás seguro de eliminar');" href="eliminar_inventario.php?id=<?php echo $filas['id'] ?>"><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>

    <script>

    </script>
</body>
</html>
