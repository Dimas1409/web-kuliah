<?php
namespace Monitor\controller;

class MonitorManager {
    private $monitors = [];

    public function addMonitor(Monitor $monitor){
        $this->monitors[] = $monitor;
        echo "Monitor Ditambahkan: {$monitor->getDetails()}<br>";
    }

    public function showMonitors() {
        foreach ($this->monitors as $monitor){
            $monitor->displayInfo();
        }
    }
}