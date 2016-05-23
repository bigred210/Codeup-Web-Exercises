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

    protected function setHeight($height)
    {
        $this->height = trim($height);
    }

    protected function setLength($length)
    {
        $this->length = trim($length);
    }

    protected function getHeight()
    {
        return $this->height;
    }

    protected function getLength()
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

