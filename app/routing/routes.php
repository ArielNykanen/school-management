<?php
$router = new AltoRouter;

$baseUrl = trim($_SERVER['PHP_SELF'], 'index.php');

$router->map('GET', $baseUrl, 'App\Controllers\IndexController@show', '');

$router->map('GET', $baseUrl.'home', 'App\Controllers\IndexController@show', 'home');

$router->map('GET', $baseUrl.'admin', 'App\Controllers\admin\DashboardController@show', 'admin_dashboard');

?>