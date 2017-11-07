<?php

$router = $di->getRouter(false);

/**
 * Not found Route
 */

$router->notFound(
	[
		'controller' => 'Errors',
		'action'	 => '_404',
	]
);

/**
 * Pages
 */

$router->addGet('/',
	[
		'controller' => 'Pages',
		'action'	 => 'index'
	]
);

$router->addGet('/domain',
	[
		'controller' => 'Pages',
		'action'	 => ''
	]
);

$router->addGet('/web-hosting',
	[
		'controller' => 'Pages',
		'action'	 => ''
	]
);

$router->addGet('/contact-us',
	[
		'controller' => 'Pages',
		'action'	 => 'contactus'
	]
);

// Clients

$router->add('/clients/login',
	[
		'controller' => 'Clients',
		'action'	 => 'login'
	]
);

// Work Place

$router->add('/workplace/login',
	[
		'controller' => 'WP',
		'action'	 => 'login'
	]
);

$router->add('/workplace/dashboard',
	[
		'controller'	=> 'WP',
		'action'			=> 'dashboard'
	]
);

$router->add('/workplace/clients/add',
	[
		'controller' => 'WP',
		'action'	 => 'addclients'
	]
);

$router->add('/workplace/employees',
	[
		'controller'	=> 'WP',
		'action'			=> 'employees'
	]
);

$router->add('/workplace/blog/category',
	[
		'controller'	=> 'WP',
		'action'			=> 'blogcate'
	]
);

$router->handle();
