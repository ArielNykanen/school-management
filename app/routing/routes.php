<?php
$router = new AltoRouter;

$baseUrl = trim($_SERVER['PHP_SELF'], 'index.php');

$router->map('GET', $baseUrl, 'App\Controllers\IndexController@show', '');

$router->map('GET', $baseUrl.'home', 'App\Controllers\IndexController@show', 'home');

// admin routes
$router->map('GET', $baseUrl.'admin',
 'App\Controllers\admin\DashboardController@show',
  'admin_dashboard');

$router->map('POST', $baseUrl.'admin',
 'App\Controllers\admin\DashboardController@get',
  'admin_form');
//========

// courses management
$router->map('GET', $baseUrl.'admin/courses/all',
 'App\Controllers\admin\CoursesController@show', 
 'courses_all');

 $router->map('POST', $baseUrl.'admin/courses/all',
 'App\Controllers\admin\CoursesController@create', 
 'courses_form');
 //========
?>