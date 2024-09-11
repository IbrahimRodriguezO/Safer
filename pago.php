<?php
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$modelos = isset($_SESSION['carrito']['modelos']) ? $_SESSION['carrito']['modelos'] : null;

$lista_carrito = array();

if($modelos != null){
    foreach($modelos as $clave => $cantidad){

                $sql = $con->prepare("SELECT id, marca, modelo, precio, $cantidad AS cantidad FROM autos WHERE id=? AND activo=1");
                $sql->execute([$clave]);
                $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);

             }
        }else{
            header("location.index.php");
            exit;
        }
?>


<!doctype html>
<html lang="es">
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
                    <a href="index.html" class="nav-link">Inicio</a>
                </li>
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Catalogo</a>
                </li>
            </ul>

            <a href="carrito.php" class="btn btn-primary">
                Carrito<span id="num_cart" class="badge bg-secondary"><?php echo $num_cart; ?></span>
            </a>
        </div>
    </div>
  </div>
</header>

<main>
    <div class="container">

    <div class="row">
        <div class="col-6">
            <h4>Detalles de pago</h4>
            <div id="paypal-button-container"></div>
        </div>

        <div class="col-6">
    
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Modelo</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if($lista_carrito == null){
                        echo '<tr><td colspan="5" class="text-center"><b>Lista vacía</b></td></tr>';
                    } else{
                        $total = 0;
                        foreach($lista_carrito as $producto){
                            $_id = $producto['id'];
                            $marca = $producto['marca'];
                            $modelo = $producto['modelo'];
                            $precio = $producto['precio'];
                            $cantidad = $producto['cantidad'];
                            $subtotal = $cantidad * $precio;
                            $total += $subtotal;

                    ?>
                    <tr>
                        <td><?php echo $marca . '  ' . $modelo; ?></td>
                        <td>
                            <div id="subtotal_<?php echo $_id; ?>" name = "subtotal[]"><?php echo MONEDA . number_format($subtotal, 2, '.', ','); ?></div>
                        </td>
        
                    </tr>
                    <?php }?>

                    <tr>
                        <td colspan="2">
                            <p class="h3 text-end" id="total"><?php echo MONEDA . number_format($total, 2, '.', ','); ?></p>
                        </td>
                    </tr>
                </tbody>
                <?php }?>
            </table>
        </div>

        
    </div>
    </div>
    </div>
</main>

<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

<script src="https://www.paypal.com/sdk/js?client-id=<?php echo CLIENT_ID ?>&currency=<?php echo CURRENCY ?>"></script>

<script>
      paypal.Buttons({
        style:{
                color: 'blue',
                shape: 'pill',
                label: 'pay'
            }, 

        createOrder: (data, actions) => {
          return actions.order.create({
            purchase_units: [{
              amount: {
                value: <?php echo $total; ?> 
              }
            }]
          });
        },

        onApprove: function(data, actions) {
            let URL = 'clases/captura.php'
           actions.order.capture().then(function(detalles) {
            console.log(detalles)
            let url = 'clases/captura.php'
            return fetch(url, {
                method: 'post',
                headers:{
                    'content-type': 'application/json'
                },
                body: JSON.stringify({
                    detalles: detalles 
                })
            })
          });
        },

        onCancel: function(data){
          alert("Pago cancelado");
          console.log(data);
        }
      }).render('#paypal-button-container');
    </script>

  </body>
</html>