<?php

/*
|--------------------------------------------------------------------------
| Constant definition
|--------------------------------------------------------------------------
|
| Define all reqired constant for debugging and determine the environment
| of application.
|
*/
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
*/
require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');

/*
|--------------------------------------------------------------------------
| Fetch configuration
|--------------------------------------------------------------------------
|
| We need application configuration to make it works. You can fetch this
| configuration from anywhere, like database, over network, etc.
|
*/
$config = require(__DIR__ . '/../config/main.php');

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Yii application instance
| which serves as the "glue" for all the components, modules, container,
| helpers, etc.
|
*/
$application = new yii\web\Application($config);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/
return $application;
