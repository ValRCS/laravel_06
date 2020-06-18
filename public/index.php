<?php
require '../vendor/autoload.php'; //to find automatically vendor libraries
echo "Hello there";

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

// create a log channel
$log = new Logger('myLogger');
$log->pushHandler(new StreamHandler('../log/my.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');
