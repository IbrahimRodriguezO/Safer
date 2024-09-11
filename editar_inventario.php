<?php
include "conexion.php";

$id=$_GET['id'];

$sql="SELECT * FROM autos where id='$id'";

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

        .textarea{
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: large;
        }

    </style>

<form action="actualizar_inventario.php" method="post">
    <div class="contenedor_registro">
    <input type="hidden" name="id" value="<?php echo $filas['id'] ?>">
    <p class="id"><b>LOS DATOS DEL MODELO SON:</b> </p>
        <p>ID:<?php echo $filas['id'] ?></p>
            <input type="text" name="marca" class="txt4" value="<?php echo $filas['marca'] ?>">
            <input type="text" name="modelo" class="txt4" value="<?php echo $filas['modelo'] ?>"><br><br>
            <textarea name="descripcion" cols="55" rows="10" class="textarea"><?php echo $filas['descripcion'] ?></textarea><br><br>
            
            <input type="text" name="precio" class="txt4" value="<?php echo $filas['precio'] ?>">
            <input type="text" name="activo" class="txt4"  value="<?php echo $filas['activo'] ?>"><br>
            <button name="registro">Confirmar cambios</button><br><br>
    </div>
</form>
</body>
</html>

<?php
}
?>