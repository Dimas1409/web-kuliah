<?php

header("Content-Type: application/json; charset=UTF-8");

include "routes/product_routes.php";

use app\routes\ProductRoutes;

$method = $_SERVER['REQUEST_METHOD'];
$path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

$ProductRoutes = new ProductRoutes();
$ProductRoutes->handle($method, $path);