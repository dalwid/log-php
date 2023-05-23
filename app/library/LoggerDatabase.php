<?php

namespace app\library;

use app\database\models\Log;
use app\enums\EnumLog;
use app\interfaces\LoggerInterface;

readonly class LoggerDatabase implements LoggerInterface
{
    public function __construct(private string $name, private string|array $message, private EnumLog $enumLog)
    {        
    }
    
    public function create()
    {
        $log = new Log;
        $log->create($this->name, json_encode($this->message), $this->enumLog->value);
        
        
        // var_dump('create database log');
    }
}