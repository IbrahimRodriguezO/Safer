<?php
$conexion = mysqli_connect("localhost", "root", "", "registros");

if(!$conexion){
    echo "Error en el enlace al servidor de la base de datos";
} else{
    echo "La conexion se establecio de forma satisfactoria";
}

$nombre=$_POST['nombre'];
$año=$_POST['año'];
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$genero=$_POST['genero'];
$ocupacion=$_POST['ocupacion'];
$user=$_POST['user'];
$clave=$_POST['clave'];
$pais=$_POST['pais'];


echo "<br><br>";
echo $nombre;
echo "<br><br>";
echo $año;
echo "<br><br>";
echo $correo;
echo "<br><br>";
echo $telefono;
echo "<br><br>";
echo $genero;
echo "<br><br>";
echo $ocupacion;
echo "<br><br>";
echo $user;
echo "<br><br>";
echo $clave;
echo "<br><br>";
echo $pais;


$insertar = ("INSERT INTO registro_users (id, nombre, año, correo, telefono, genero, ocupacion, user, clave, pais) VALUES
('', '$nombre', '$año', '$correo', '$telefono', '$genero', '$ocupacion', '$user', '$clave', '$pais')");

$resultado = mysqli_query($conexion, $insertar);

if (!$resultado){
    echo "Error al ingresar los datos";
}else{
    echo "<br><br> Almacenamiento correcto de la informacion";
}

mysqli_close($conexion);

?>