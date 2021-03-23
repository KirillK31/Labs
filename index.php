<?php

use KirillK\Square;
include 'KirillK\Line.php';
include 'core\EquationInterface.php';
include 'KirillK/Square.php';

$sqr = new Square();
$res = $sqr->solve(1, 4, 4);

if ($res == null) {
    echo "The equation does not have roots";
} else {
    foreach ($res as $el) {
        echo $el;
    }
}