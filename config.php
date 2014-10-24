<?php

/* * *
 * System configuration
 */

// Define base path
define('BASE_PATH', __DIR__);

// Define base url
define('BASE_URL', 'http://localhost/ecommerce');

//Define run time enviornment
define('ENV', 'dev');

// Define log path
define('LOG_PATH', BASE_PATH . DIRECTORY_SEPARATOR . 'log' . DIRECTORY_SEPARATOR);

// System configuration
define('DEFAULT_CONTROLLER', 'index');
define('DEFAULT_ACTION', 'index');
define('DEFAULT_LAYOUT', 'index');

/**
 * enviornment based configuration
 * @todo set appropriate error reporting label and other configuration
 */
switch (ENV) {
    case 'TEST':
        break;
    case 'PRODUCTION':
        break;
    case 'DEVELOPMENT':
    default:
        define('DB_HOST', 'localhost');
        define('DB_USER', 'root');
        define('DB_PASSWORD', '');
        define('DB_NAME', 'ecommerce');
        break;
}



