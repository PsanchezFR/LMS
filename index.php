<?php
    session_start();

    //CATCH THE URL REQUESTED
	$requested_url = $_SERVER['PATH_INFO'];
	if(!$requested_url){
	    $requested_url = "/";
    }

    //REQUIRING TOOLS
	require 'config/routes.php';
	require 'tools/logger.php';
	require 'config/pdo.php';

	$logger = new Logger();

    //ROUTE LOGIC
	if(array_key_exists($requested_url, $routes_config))    // route config from routes.php
	{
		$logger -> log("route found : ${requested_url}");
		$controller = $routes_config[$requested_url];

		if(file_exists($controller))
		{	
			$logger -> log("file found : ${controller}");
			require 'view/top.php';
			require $controller;
			require 'view/bot.php';
		}
		else
		{
			$logger -> log("[404] file not found : ${controller}");
			require 'controller/errors/404.php';
		}
	}
	else
	{	
		$logger -> log("[404] route not found : ${requested_url}");
		require 'controller/errors/404.php';
	}
?>