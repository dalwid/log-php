<?php

namespace app\library;

use app\enums\EnumLog;
use app\interfaces\LoggerInterface;

readonly class LoggerFile implements LoggerInterface
{
    
    public function __construct(private string $name, private string|array $message, private EnumLog $enumLog)
    {        
    }
    
    public function create()
    {
        $message = is_array($this->message) ? json_encode($this->message) : $this->message;
        $message .= '|'.$this->enumLog->value. '|' .date('d/m/Y H:i:s');

        file_put_contents($this->name. '.txt', ' '.$message, FILE_APPEND) . ' ---------------- ';

        // var_dump('create log file');
    }
}