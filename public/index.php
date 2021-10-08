<?php
require '../vendor/autoload.php';
use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
$world = new World();
echo '<br>';
$lara= new Lara();
echo '<br>';
$vincent= new Hello\Someone('Vincent');
echo '<br>';
$mary= new \Demo\Hello\Someone('Mary');
echo '<br>';
$john= new Demo\Hello\Someone('John');
echo '<br>';

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('path/to/your.log', Logger::WARNING));

// add records to the log
$log->warning('Foo');
$log->error('Bar');