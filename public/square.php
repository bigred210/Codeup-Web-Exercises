<?php

class Square extends Rectangle
{

    public function perimeter()
    {
      return $this->length * 2 + $this->height * 2;
    }
}