<?php

$router = $di->getRouter(false);

// Not Found

$router->notFound(
	[
		'controller' => 'Errors',
		'action'	 => '_404',
	]
);

// Pages Routes

$router->add('/',
	[
		'controller' => 'Pages',
		'action'	 => 'index'
	]
);

// Client Routes

// Admin Routes

$router->handle();
