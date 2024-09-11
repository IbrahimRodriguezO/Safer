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
    $sql = "SELECT cl.id_cliente, cl.nombre, cl.paterno, cl.materno, cl.correo, cl.telefono, cl.genero, cl.ocupacion, cl.pais, us.usuario
    FROM cliente as cl
    INNER JOIN usuario as us on cl.id_cliente = us.id_cliente";
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

      
   <div class="titulo"><h2>USUARIOS</h2></div> 

      <div class= "busqueda">
  <form action="buscar.php" method="post">
    <input type="text" placeholder="Buscar por género" name="genero"> <button class="submit"><i class="bi bi-search"></i></button>
  </form>
  </div>

    <div class = "enlace">
        <p class = "link"><a href="agregar.html" class="alta">Nuevo cliente</a>  <a href="PDFus.php">Descargar registros</a></p>
</div>
<div>

        <table class = "table" align = "center">
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
                            <td><?php echo $filas['ocupacion'] ?> </td>
                            <td><?php echo $filas['usuario'] ?> </td>
                        
                            <td>
                            <a class = "text-success" href="editar.php?id_cliente=<?php echo $filas['id_cliente'] ?>"><i class="bi bi-pencil-square"></i></a>
                            <a class = "text-danger" onclick="return confirm('¿Estás seguro de eliminar?');" href="eliminar.php?id_cliente=<?php echo $filas['id_cliente'] ?>"><i class="bi bi-trash"></i></a>
                               
                            </td>
                        </tr>
                <?php
                } ?>
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

