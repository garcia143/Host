<?php

$loader = new \Phalcon\Loader();

/**
 * Register Namespace
 */

$loader->registerNamespaces(
	[
		'Host\Forms' => $config->application->formsDir,
		'Host'		 => $config->application->libraryDir
	]
);

/**
 * We're a registering a set of directories taken from the configuration file
 */
$loader->registerDirs(
    [
        $config->application->controllersDir,
        $config->application->modelsDir
    ]
);

$loader->register();
