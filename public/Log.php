<?php

class Log
{
    public $filename;
    public $handle;

    public function __construct($prefix = 'log') 
    {
        $currentLog = date('Y-m-d');
        $this->filename = "$prefix-$currentLog.log";  
        $this->handle = fopen($this->filename, 'a');
    }

    public function logMessage($logLevel, $message)
    {
        $currentLog = date('Y-m-d');
        $currentTime = date('h:i:s=T');
        fwrite($this->handle, $currentLog . ' ' . $currentTime . ' ' . "[$logLevel]" . ' ' . $message . PHP_EOL);
    }

    public function logInfo($message)
    {
       $this->logMessage("INFO", "$message"); 
    }

    public function logError($message)
    {
       $this->logMessage("ERROR", "$message");
    }

    public function __destruct()
    {
        fclose($this->handle);
    }
}












