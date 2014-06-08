<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
Yii::setPathOfAlias('bootstrap', dirname(__FILE__) . '/../extensions/bootstrap');
return array(
  'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
  'name' => 'My Web Application',
  'defaultController' => 'site',
  'theme' => 'bootstrap', // requires you to copy the theme under your themes directory

  // preloading 'log' component
  'preload' => array('log'),

  // autoloading model and component classes
  'import' => array(
    'application.models.*',
    'application.components.*',
  ),

  'modules' => array(
    // uncomment the following to enable the Gii tool
    'adm',
    'gii' => array(
      'class' => 'system.gii.GiiModule',
      'password' => '1111',
      // If removed, Gii defaults to localhost only. Edit carefully to taste.
      'ipFilters' => false,
      'generatorPaths' => array(
        'bootstrap.gii',
      ),
    ),
  ),

  // application components
  'components' => array(
    'user' => array(
      // enable cookie-based authentication
      'class' => 'WebUser',
      'allowAutoLogin' => true,
    ),
    // uncomment the following to enable URLs in path-format
    'urlManager' => array(
      'urlFormat' => 'path',
      'showScriptName' => false,
      'rules' => array(
        '<controller:\w+>/<id:\d+>' => '<controller>/view',
        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
      ),
    ),
    'image' => array(
      'class' => 'application.extensions.image.CImageComponent',
      'driver' => 'GD',
    ),
    //'db'=>array(
    //	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
    //),
    // uncomment the following to use a MySQL database
    'bootstrap' => array(
      'class' => 'bootstrap.components.Bootstrap',
    ),
    'db' => array(
      'connectionString' => 'mysql:host=91.234.33.111;dbname=stihi',
      // 'emulatePrepare' => true,
      'username' => 'stihi',
      'password' => 'stihi',
      'charset' => 'utf8',
      //'enableProfiling' => true,
      // 'enableParamLogging' => true,
    ),
    'errorHandler' => array(
      // use 'site/error' action to display errors
      'errorAction' => 'site/error',
    ),
    'log' => array(
      'class' => 'CLogRouter',
      'routes' => array(
        array(
          'class' => 'ext.yii-debug-toolbar.YiiDebugToolbarRoute',
          // Access is restricted by default to the localhost
          'ipFilters' => array('127.0.0.1', '192.168.1.*'),
        ),
      ),
    ),
  ),

  // application-level parameters that can be accessed
  // using Yii::app()->params['paramName']
  'params' => array(
    // this is used in contact page
    'adminEmail' => 'webmaster@example.com',
  ),
);