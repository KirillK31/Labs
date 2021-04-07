<?php
require __DIR__ . "/vendor/autoload.php";
use kormakov\{Square, MyLog};

MyLog::log("Program version: " . trim(file_get_contents("version")));

try {
    echo "Enter 3 parameters: " . PHP_EOL;
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);
    foreach ($res as $el) {
        MyLog::log($el);
    }

    } catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();
