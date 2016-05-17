<?php


class Rectangle
{
    public $length;
    public $height;

    public function __construct($length, $height)
    {
        $this->length = $length;
        $this->height  = $height;
    }

    public function area()
    {
        return $this->length * $this->height;
    }
}

