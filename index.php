<?php
    require('include/startup.php');
	
   
    $db = new PDO('mysql:host=localhost;dbname=mysite;charset=utf8', 'root', '');

    $registry->set('db', $db);
	
	
	$router = new Router($registry);

    $registry->set ('router', $router);
	
	$router->delegate();

?>