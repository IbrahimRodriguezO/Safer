<?php
include "conexion.php";

$id=$_GET['id_admin'];

$sql="SELECT * FROM administradores where id_admin='$id'";

$resultado = mysqli_query($conexion, $sql);

while($filas=mysqli_fetch_array($resultado)){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body
        {
            background-image: url("http://www.fondoswiki.com/Uploads/fondoswiki.com/ImagenesGrandes/audi-r8-6.jpg");
            background-repeat: no-repeat;
            background-size: 100% 100%;
            background-attachment: fixed;
        }
        .contenedor_registro
        {
            margin: auto;
            padding: 10px;
            width: 550px;
            height: 670px;
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.616);
            border-radius: 25px;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .txt1
        {
            width: 440px;
            height: 25px;
            padding: 15px;
            font-size: large;
        }
        .txt2
        {
            width: 200px;
            height: 25px;
            padding: 15px;
            font-size: large;
            margin-top: 5px;
        }
        .txt3
        {
            width: 200px;
            height: 25px;
            padding: 15px;
            font-size: large;
        }
        .txt4
        {
            width: 200px;
            height: 25px;
            padding: 15px;
            font-size: large;
            margin-top: 5px;
        }
        .txt5
        {
            width: 200px;
            height: 25px;
            padding: 15px;
            font-size: large;
        }
        .txt6
        {
            width: 440px;
            height: 25px;
            padding: 15px;
            font-size: large;
            margin-top: 5px;
        }
        .txt7
        {
            width: 440px;
            height: 25px;
            padding: 15px;
            font-size: large;
            margin-top: 5px;
        }
        button
        {
            width: 150px;
            height: 40px;
            margin-top: 7px;
            color: white;
            font-size: medium;
            border-radius: 10px;
            border: none;
            background-color: rgb(3, 192, 3);
        }
        button:hover
        {
            background-color: rgb(2, 160, 2);
        }

    </style>

<form action="actualizaradmin.php" method="post">
    <div class="contenedor_registro"><h1></h1>
    <input type="hidden" name="id_admin" value="<?php echo $filas['id_admin'] ?>">
    <p class="id"><b>LOS DATOS DEL ADMINISTRADOR SON:</b> </p>
        <p>ID:<?php echo $filas['id_admin'] ?></p>
            <input type="text" name="nombre" class="txt1" value="<?php echo $filas['nombre'] ?>"><br>
            <input type="text" name="paterno" class="txt2" value="<?php echo $filas['paterno'] ?>">
            <input type="text" name="materno" class="txt3" value="<?php echo $filas['materno'] ?>"><br>
            <input type="text" name="correo" class="txt7" value="<?php echo $filas['correo'] ?>"><br>
            <input type="text" name="fecha" class="txt4" value="<?php echo $filas['fecha_nac'] ?>">
            <input type="text" name="telefono" class="txt4" value="<?php echo $filas['telefono'] ?>"><br>
            <input type="text" name="genero" class="txt4"value="<?php echo $filas['genero'] ?>">
            <input type="text" name="pais" class="txt4" value="<?php echo $filas['pais'] ?>"><br>
            <input type="text" name="rol" class="txt7" value="<?php echo $filas['rol'] ?>">
            <input type="text" name="user" class="txt7" value="<?php echo $filas['usuario'] ?>">
            <input type="password" name="clave" class="txt7" value="<?php echo $filas['clave'] ?>">
            <button name="registro">Confirmar cambios</button><br><br>
    </div>
</form>
</body>
</html>

<?php
}
?>