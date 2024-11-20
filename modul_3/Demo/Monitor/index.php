<?php
require_once 'Traits/TampilTraits.php';
require_once 'Controllers/Monitor.php';
require_once 'Controllers/Monitor4K.php';
require_once 'Controllers/MonitorHD.php';
require_once 'Controllers/MonitorManager.php';

use Monitor\controller\MonitorHD;
use Monitor\controller\Monitor4K;
use Monitor\controller\MonitorManager;

$manager = new MonitorManager();
$hdMonitor1 = new MonitorHD("AOC", "27G15N", 27);
$hdMonitor2 = new MonitorHD("Samsung", "S24D", 24);
$monitor4K = new Monitor4K("LG", "UHD27", 27);

$manager->addMonitor($hdMonitor1);
$manager->addMonitor($hdMonitor2);
$manager->addMonitor($monitor4K);

echo "<br>Semua Monitor: <br>";
$manager->showMonitors();