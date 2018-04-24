<?php
	$routes_config = [
    //
    //  HOME
    //
		'/home' => 'controller/home.php',
    //
    //  AUTHENTIFICATION
    //
		'/auth/login' => 'controller/auth/login.php',
        '/auth/register' => 'controller/auth/register.php',
		'/auth/logout' => 'controller/auth/logout.php',
        '/auth/thanks' => 'controller/auth/thanks.php',
    //
    //  DASHBOARD
    //
		'/dashboard' => 'controller/dashboard/index.php',
	];

?>