<?php

/**
 * Config common to all environments
 * @var array
 */
$shared = require(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'shared.php');

$config = array(
    'components' => array(
        // uncomment the following to use a MySQL database
        'db'=>array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=webapp',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
            'tablePrefix' => 'webapp_',
        ),
    ),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'adminEmail' => 'ash.finlayson@gmail.com',
    ),
    
);


return CMap::mergeArray($shared, $config);