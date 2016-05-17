<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangleTest = new Rectangle(10,5);
    echo $rectangleTest->area() . PHP_EOL;

$squareTest = new Square(4,4);
    echo $squareTest->perimeter() . PHP_EOL;

$squareTest1 = new Square(4,4);
    echo $squareTest1->area() . PHP_EOL;
