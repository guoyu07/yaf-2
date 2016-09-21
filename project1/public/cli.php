<?php
/**
 * Created by PhpStorm.
 * User: Kevensuu
 * Date: 2016-09-21 16:39
 */

define('APPLICATION_PATH', dirname(__FILE__)."/..");

require APPLICATION_PATH.'/../vendor/autoload.php';

$application = new Yaf_Application(APPLICATION_PATH . "/conf/application.ini");
$application->getDispatcher()->dispatch(new Yaf_Request_Simple());