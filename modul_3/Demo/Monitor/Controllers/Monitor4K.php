<?php
namespace Monitor\controller;

use Monitor\traits\TampilTraits;

class Monitor4K extends Monitor{
    use TampilTraits;
    public function getDetails()
    {
        return "Monitor 4K: {$this->brand}, {$this->model}, {$this->ukuran} Inci";
    }
}