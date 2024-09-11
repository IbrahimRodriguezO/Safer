<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if($id == '' || $token == ''){
    echo 'Error al procesar la petición';
    exit;
} else{
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if($token == $token_tmp){

        $sql = $con->prepare("SELECT count(id) FROM autos WHERE id=? AND activo=1");
        $sql->execute([$id]);

        if($sql->fetchColumn() >0){

            $sql = $con->prepare("SELECT marca, modelo, descripcion, precio FROM autos WHERE id=? AND activo=1 LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $marca = $row['marca'];
            $modelo = $row['modelo'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $dir_images = 'images/modelos/'.$id.'/';

            $rutaImg = $dir_images .'principal.png';

            if(!file_exists($rutaImg)){
                $rutaImg = 'images/no-photo.png';
            }

            $imagenes = array();
            if(file_exists($dir_images)){
            if(file_exists($dir_images)){
            $dir = dir($dir_images);

            while(($archivo = $dir->read()) != false){
                if($archivo != 'principal.png' && (strpos($archivo, 'png'))){
                    $ $imagenes[]  = $dir_images .$archivo;
                }
            }
        }
            $dir->close();
        }
        }

    } else{
        echo 'Error al procesar la petición';
    exit;
    }
}

$sql = $con->prepare("SELECT id, marca, modelo, descripcion, precio FROM autos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <title>Modelos</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
    
    <header>
  <div class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <strong>Modelos</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="#navbarHeader">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="index2.php" class="nav-link">Catalogo</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link active">Detalles</a>
                </li>
            </ul>

            <a href="checkout.php" class="btn btn-primary">
                Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
            </a>
        </div>
    </div>
  </div>
</header>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 order-md-1">
                <img src="<?php echo $rutaImg; ?>" class="d-block w-100">
            </div>

            <div class="col-md-6 order-md-2">
                <h2><?php echo $marca . '  '. $modelo?></h2>
                <h2><?php echo MONEDA .number_format($precio, 2, '.', ','); ?></h2>
                <p class="lead">
                    <?php echo $descripcion; ?>
                </p>

                <div class="d-grid gap-3 col-10 mx-auto">
                    <button class="btn btn-primary" type="button">Comprar ahora</button>
                    <button class="btn btn-outline-primary" type="button" onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>');">Agregar al carrito</button>
                </div>
            </div>

        </div>
    </div>
</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script>
    function addProducto(id, token){
        let url = 'clases/carrito.php'
        let formData = new FormData()
        formData.append('id', id)
        formData.append('token', token)

        fetch(url,{
            method: 'POST',
            body: formData,
            mode: 'cors'
        }).then(response => response.json())
        .then(data => {
            if(data.ok){
                let elemento = document.getElementById("num_cart")
                elemento.innerHTML = data.numero
            }
        })
    }
</script>

  </body>
</html>