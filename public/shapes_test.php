<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangleTest = new Rectangle(10,5);
    echo $rectangleTest->area() . PHP_EOL;

$squareTest = new Square(22);
    echo $squareTest->perimeter() . PHP_EOL;
    echo $squareTest->area() . PHP_EOL;

    
