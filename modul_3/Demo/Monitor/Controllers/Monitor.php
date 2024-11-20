<?php
namespace Monitor\controller;

abstract class Monitor {
    protected $brand;
    protected $model;
    protected $ukuran;

    public function __construct($brand, $model, $ukuran)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->ukuran = $ukuran;
    }

    abstract public function getDetails();
}