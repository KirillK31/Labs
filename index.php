<?php
use KirillK\{Square, MyLog};
include 'core\EquationInterface.php';
include 'core\LogAbstract.php';
include 'core\LogInterface.php';
include 'KirillK\MyLog.php';
include 'KirillK\Line.php';
include 'KirillK\Square.php';
include 'KirillK\KirillExeption.php';

MyLog::log("Program version: " . trim(file_get_contents("version")));

try {
    echo "Enter 3 parameters: " . PHP_EOL;
$a = readline();
$b = readline();
$c = readline();

$sqr = new Square();
    MyLog::log("The equation is: ". $a.'x^2 + '.$b.'x + '.$c.' = 0'. PHP_EOL);

    $res = $sqr->solve($a, $b, $c);

} catch (RuntimeException $e){
   MyLog::log("Error".$e->getMessage());
}
MyLog::write();
