<?php
require '../vendor/autoload.php';

use app\database\Connection;
use app\enums\EnumLog;
use app\library\Log;
use app\library\LoggerDatabase;
use app\library\LoggerFile;

try {
    $conn = Connection::getConnection();
    $query = $conn->query("select * from users");
    var_dump($query->fetchAll());
  } catch (\PDOException $th) {
    Log::create(new LoggerDatabase('log', $th->getTrace(), EnumLog::DatabaseError));
  }
