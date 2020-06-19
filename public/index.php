<?php
require '../vendor/autoload.php'; //to find automatically vendor libraries
echo "Hello there I am logging";

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// create a log channel
// $log = new Monolog\Logger('myLogger');
$log = new Logger('myLogger');
// $log->pushHandler(new Monolog\Handler\StreamHandler('../log/my.log', Monolog\Logger::DEBUG));
//with use we can write the short version
$log->pushHandler(new StreamHandler('../log/mysecond.log', Logger::DEBUG));

// add records to the log
// var_dump($_SERVER);
$log->info($_SERVER['HTTP_USER_AGENT']);
$log->warning('Foo');
$log->debug("Lowest of the low");
$log->error('Bar');
$log->info('Morning');
$log->debug("Lowest of the low");
