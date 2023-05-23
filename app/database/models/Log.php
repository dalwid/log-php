<?php

namespace app\database\models;

use app\database\Connection;

class Log
{
    public function create(string $name, string $message, string $type)
    {
        $connection = Connection::getConnection();
        $prepare = $connection->prepare("insert into {$name}(message, type) values(:message, :type)");
        return $prepare->execute([
            'message' => $message,
            'type' => $type
        ]);
    }
}
