<?php
	$requested_url = $_SERVER['REQUEST_URI'];

	require 'config/routes.php';
	require 'tools/logger.php';

	$logger = new Logger();

	if(array_key_exists($requested_url, $routes_config))
	{
		$logger -> log("route found : ${requested_url}");
		$controller = $routes_config[$requested_url];

		if(file_exists($controller))
		{
			$logger -> log("file found : ${controller}");
			require $controller;
		}
		else
		{
			$logger -> log("[404] file not found : ${controller}");
			require 'controller/errors/404.php';
		}
	}
	else
	{	
		$logger -> log(" [404] route not found : ${requested_url}");
		require 'controller/errors/404.php';
	}
?>