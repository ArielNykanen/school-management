<?php 
/**
 * start session if not already started ...
 */
if(!isset($_SESSION)) session_start(); 

//Load environment variable
require_once __DIR__ . '/../app/config/_env.php';


new \App\Classes\DataBase;


require_once __DIR__ . '/../app/routing/routes.php';


new \App\RouteDispatcher($router);

?>