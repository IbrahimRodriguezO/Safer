<?php

define("CLIENT_ID", "AWo6SsugGs9iMhAyvq4vJXRpioZzrDrS3RgfkzztuZmbE5Kxc8sfvnXPGmNH1ovyUkG_BrG8CIf7qcqY");
define("CURRENCY", "MXN");
define("KEY_TOKEN", "JDO.nce.932*");
define("MONEDA", "$");

session_start();

$num_cart = 0;

if(isset( $_SESSION['carrito']['modelos'])){
    $num_cart = count($_SESSION['carrito']['modelos']);
}

?>