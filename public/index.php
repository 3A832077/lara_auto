<?php
require '../vendor/autoload.php';
use \Demo\HelloWorld as World;
use Demo\Hello\Lara;
use Demo\Hello;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Carbon\Carbon;
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

printf("現在時間是:%s", Carbon::now()->toDateTimeString());
echo '<br>';
printf("溫哥華現在時間是:%s", Carbon::now('America/Vancouver'));  
echo '<br>';
//implicit __toString()
$tomorrow = Carbon::now()->addDay();
$lastWeek = Carbon::now()->subWeek();
$nextSummerOlympics = Carbon::createFromDate(2016)->addYears(4);

$officialDate = Carbon::now()->toRfc2822String();

$howOldAmI = Carbon::createFromDate(1975, 5, 21)->age;

$noonTodayLondonTime = Carbon::createFromTime(12, 0, 0, 'Europe/London');

$internetWillBlowUpOn = Carbon::create(2038, 01, 19, 3, 14, 7, 'GMT');
