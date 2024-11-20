<?php
namespace Monitor\controller;

use Monitor\traits\TampilTraits;

class MonitorHD extends Monitor {
    use TampilTraits;
    public function getDetails()
    {
        return "HD Monitor: {$this->brand}, {$this->model}, {$this->ukuran} Inci";
    }
}