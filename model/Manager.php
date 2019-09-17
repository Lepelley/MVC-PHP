<?php

namespace Leyzou\Mvc\Model;

class Manager
{
    private $rdbms = 'mysql';
    private $host = 'localhost';
    private $db = 'test';
    private $user = 'root';
    private $password = '';

    protected function dbConnect()
    {
        $db = new \PDO($this->rdbms . ':host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->user, $this->password);
        return $db;
    }
}