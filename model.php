<?php

class Model
{
    // table to store our stuff at
    protected static $table = '';

    // Array to store our key/value data
    private $attributes = [];

    // Magic setter to populate $data array
    public function __set($name, $value)
    {
        // Set the $name key to hold $value in $data
        $this->attributes[$name] = $value;
    }

    // Magic getter to retrieve values from $data
    public function __get($name)
    {
        // Check for existence of array key $name
        if (array_key_exists($name, $this->attributes)) {
            return $this->attributes[$name];
        }
        // will return is null IF the if statement above is not met
        return "is null";
    }

    public static function getTableName()
    {
    return static::$table;
    }

}