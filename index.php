<?php
define('IS_LOCAL', strpos($_SERVER['DOCUMENT_ROOT'], '/var/') === false);
define('DOMAIN_STATIC', '');
define('DOMAIN_NAME', "Dlreels");

$debug = IS_LOCAL || isset($_GET['testdebug']);
$error = !empty($_COOKIE['testdebug']) ? true : false;
// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', $error);
defined('YII_ENV') or define('YII_ENV', $debug ? 'dev' : 'prod'); // prod|dev|test

define('APP_PATH', __DIR__);

require(APP_PATH . '/vendor/autoload.php');
require(APP_PATH . '/vendor/yiisoft/yii2/Yii.php');
require(APP_PATH . '/config/bootstrap.php');

$config = require(APP_PATH . '/config/config.php');
(new yii\web\Application($config))->run();

