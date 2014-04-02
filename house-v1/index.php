<?php

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';

$environment = getenv('APPLICATION_ENV');
defined('APPLICATION_ENV') || define('APPLICATION_ENV', $environment);

$config = dirname(__FILE__).'/protected/config/'.  strtolower(APPLICATION_ENV) . '.php';



// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();