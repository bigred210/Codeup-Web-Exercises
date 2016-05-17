<?php


class Rectangle
{
    private $length;
    private $height;

    public function __construct($height,$length)
    { 
        $this->setLength($length);
        $this->setHeight($height);
    }

    public function setHeight($height)
    {
        $this->height = trim($height);
    }

    public function setLength($length)
    {
        $this->length = trim($length);
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getLength()
    {
        return $this->length;
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

