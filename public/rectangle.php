<?php


class Rectangle
{
    public $length;
    public $height;

    public function __construct($height,$length)
    {
        $this->length = $length;
        $this->height  = $height;
    }

    public function area()
    {
        return $this->length * $this->height;
    }

    public function perimeter()
    {
      return $this->height * 4;
    }
}

