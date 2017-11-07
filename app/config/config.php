<?php
/*
 * Modified: prepend directory path of current file, because of this file own different ENV under between Apache and command line.
 * NOTE: please remove this comment.
 */
defined('BASE_PATH') || define('BASE_PATH', getenv('BASE_PATH') ?: realpath(dirname(__FILE__) . '/../..'));
defined('APP_PATH') || define('APP_PATH', BASE_PATH . '/app');

return new \Phalcon\Config([
    'database' => [
        'adapter'     => 'Mysql',
        'host'        => 'localhost',
        'port'        => '3307',
        'username'    => 'root',
        'password'    => '',
        'dbname'      => 'host',
        'charset'     => 'utf8',
    ],
    'application' => [
        'appName'        => 'Host',
        'defaultLang'    => 'th',
        'langAvailable'  => array('en','th'),
        'appDir'         => APP_PATH . '/',
        'controllersDir' => APP_PATH . '/controllers/',
        'modelsDir'      => APP_PATH . '/models/',
        'migrationsDir'  => APP_PATH . '/migrations/',
        'viewsDir'       => APP_PATH . '/views/',
        'pluginsDir'     => APP_PATH . '/plugins/',
        'libraryDir'     => APP_PATH . '/library/',
        'formsDir'       => APP_PATH . '/forms/',
        'langsDir'       => APP_PATH . '/languages/',
        'cacheDir'       => BASE_PATH . '/cache/',
        'baseUri'        => '/',
        'publicUrl'      => 'http://host.dev/',
        'cryptSalt'      => 'Hum2rJZznY94UE9YDfMmg4mPwhxvRFrJvVUtsGYHpA9CvebmrmNTcM54pMNahqHpYqykgTcUZZwpfEV8WuebkpEuEAds4k2xjPWedtdqz7gUbmEUgkhhburRez8kfbAR',
    ]
]);
