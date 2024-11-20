<?php

namespace app\routes;

include "controller/product_controller.php";

use app\controller\ProductController;
use app\models\product;

class ProductRoutes{
    public function handle($method, $path){
        if ($method == "GET" && $path == "/api/product"){
            $controller = new ProductController();
            echo $controller->index();
        }

        if ($method == "GET" && strpos($path, "/api/product/") == 0){
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->getById($id);
        }

        if ($method == "POST" && $path == "/api/product") {
            $controller = new ProductController();
            echo $controller->insert();
        }

        if ($method == "PUT" && strpos($path, "/api/product/") == 0){
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
        }

        if ($method == "DELETE" && strpos($path, "/api/product/") == 0){
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}