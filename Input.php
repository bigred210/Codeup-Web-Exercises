<?php

class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */

    public static function has($key)
    {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */

    public static function get($key, $default = null)
    {
        return self::has($key) ? $_REQUEST[$key] : $default;
    }

    public static function getString($key, $min, $max)
    {
        $potentialString = self::get($key);

        if (is_numeric ($potentialString) || !is_string($potentialString)) {
            throw new InvalidArgumentException(" Invalid Argument, $key must be corrected! ");
        }
        if (empty($potentialString)) {
            throw new OutOfRangeException("Out of range, $key was left empty!");
        }
        if ($potentialString < $min || $potentialString > $max) {
            throw new RangeException("The Range of $key bust be between $min - $max characters!");
        }
        if ($potentialString > $max || $potentialString < $min) {
            throw new LengthException("The Length of $key bust be between $min - $max characters!");
        }

        return $potentialString;
    }

    public static function getNumber($key, $min, $max)
    {
        $potentialInt = self::get($key);

        if (!is_numeric($potentialInt))  {
            throw new InvalidArgumentException(" $key must be corrected! ");
        }
        if (empty($potentialInt)) {
            throw new OutOfRangeException("$key was left empty!");
        }
        if ($potentialInt < $min || $potentialInt > $max) {
            throw new RangeException("The value of $key bust be between $min - $max characters!");
        }
        if ($potentialInt > $max || $potentialInt < $min) {
            throw new LengthException("The value of $key bust be between $min - $max characters!");
        }

        $potentialInt = (int)$potentialInt;

        return $potentialInt;
    }
    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}













