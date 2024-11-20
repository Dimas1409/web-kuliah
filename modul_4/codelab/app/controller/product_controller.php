<?php

namespace app\controller;

include "traits/ApiResponseFormatter.php";
include "models/product.php";

use app\models\product;
use app\traits\ApiResponseForamtter;

class ProductController {
    use ApiResponseForamtter;

    public function index(){
        $productModel = new product();
        $response = $productModel->findAll();

        return $this->apiResponse(200, "success", $response);
    }

    public function getById($id){
        $productModel = new product();
        $response = $productModel->findById($id);
        return $this->apiResponse(200, "success", $response); 
    }

    public function insert(){
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);
        if (json_last_error()){
            return $this->apiResponse(400, "Error Invalid", null);
        }
        $productModel = new product();
        $response = $productModel->create([
            "product_name" => $inputData['product_name']
        ]);
        return $this->apiResponse(200, "success", $response);
    }

    public function update($id){
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);
        if (json_last_error()){
            return $this->apiResponse(400, "Invalid Input", null);
        }

        $productModel = new product();
        $response = $productModel->update([
            "product_name" => $inputData ['product_name']
        ], $id);

        return $this->apiResponse(200, "success", $response);
    }

    public function delete($id){
        $productModel = new product();
        $response = $productModel->delete($id);

        return $this->apiResponse(200, "success", $response);
    }
}