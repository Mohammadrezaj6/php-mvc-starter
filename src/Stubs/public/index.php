<?php


// Simple front controller for the starter
require __DIR__ . '/../app/Controllers/HomeController.php';


use App\Controllers\HomeController;


$controller = new HomeController();
$controller->index();