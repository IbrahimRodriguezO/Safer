<?php
include "conexion.php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Administradores</title>
    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="estilosCRUD.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body class = "inicio">
    <?php
    $sql = "SELECT * FROM administradores";
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

      <div class="titulo"><h2>ADMINISTRADORES</h2></div> 

    <div class= "busqueda">
    <form action="buscar_admin.php" method="post">
    <input type="text" placeholder="Buscar por género" name="genero"> <button class="submit"><i class="bi bi-search"></i></button>
    </form>
    </div>

    <div class = "enlace">
    <p class = "link"><a href="agregaradmin.html" class="alta">Nuevo administrador</a>  <a href="PDFadmin.php">Descargar registros</a></p>
    </div>
    <div>

        <table class = "table" align="center">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>Género</th>
                    <th>Pais</th>
                    <th>Rol</th>
                    <th>Usuario</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while($filas=mysqli_fetch_array($datos)){

                        ?>
                        <tr>
                            <td><?php echo $filas['nombre'] ?> </td>
                            <td><?php echo $filas['paterno'] ?> </td>
                            <td><?php echo $filas['materno'] ?> </td>
                            <td><?php echo $filas['correo'] ?> </td>
                            <td><?php echo $filas['telefono'] ?> </td>
                            <td><?php echo $filas['genero'] ?> </td>
                            <td><?php echo $filas['pais'] ?> </td>
                            <td><?php echo $filas['rol'] ?> </td>
                            <td><?php echo $filas['usuario'] ?> </td>
                            <td>
                            <a class = "text-success" href="editaradmin.php?id_admin=<?php echo $filas['id_admin'] ?>" ><i class="bi bi-pencil-square"></i></a>
                            <a class = "text-danger" onclick="return confirm('¿Estás seguro de eliminar?');" href="eliminaradmin.php?id_admin=<?php echo $filas['id_admin'] ?>" ><i class="bi bi-trash"></i></a>
                            </td>
                        </tr>
                <?php
                } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
