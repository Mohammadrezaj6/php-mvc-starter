<?php


namespace App\Controllers;


class HomeController
{
public function index()
{
// داده برای نمایش
$data = ['title' => 'Welcome to MVC Starter', 'message' => 'Your project is ready!'];
require __DIR__ . '/../Views/home.view.php';
}
}