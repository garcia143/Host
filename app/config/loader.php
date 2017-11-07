<?php

$loader = new \Phalcon\Loader();

/**
 * Register Namespace
 */

$loader->registerNamespaces(
	[
		'Host\Models' => $config->application->modelsDir,
		'Host\Forms' => $config->application->formsDir,
		'Host'		 => $config->application->libraryDir
	]
);

/**
 * Register Dir
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();
