<?php
namespace Monitor\traits;

trait TampilTraits{
    public function displayInfo(){
        echo "Brand: {$this->brand}, Model: {$this->model}, Ukuran: {$this->ukuran}\"<br>";
    }
}