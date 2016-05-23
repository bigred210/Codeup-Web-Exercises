<?php

class Log
{
    private $filename;
    private $handle;

    public function __construct($prefix = 'log') 
    {
        $currentLog = date('Y-m-d');
        $this->setFilename("$prefix-$currentLog.log");

        if (touch($this->$filename) && is_writable($this->$filename)) {
            $this->setHandle(fopen($this->filename, 'a'));  
        }    
    } 
    private function setFilename($filename)
    {
        if (is_string($filename)) {
   
        }
        $this->filename = trim($filename);
    }
    public function logInfo($message)
    {
       $this->logMessage("INFO", "$message"); 
    } 
    public function __destruct()
    {
        fclose($this->handle);
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










