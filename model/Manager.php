<?php

namespace Leyzou\Mvc\Model;

class Manager
{
    private $dns = 'mysql';
    private $host = 'localhost';
    private $port = '3306';
    private $db = 'test';
    private $user = 'root';
    private $password = '';

    protected function dbConnect()
    {
        if ($dns == 'mysql') { // MySQL
            $db = new \PDO($this->dns . ':host=' . $this->host . ';dbname=' . $this->db . ';charset=utf8', $this->user, $this->password);
        } 
        else if ($dns == 'pgsql') { // PostgreSQL
            $db = new \PDO($this->dns . ':host=' . $this->host . 'port=' . $port . ';dbname=' . $this->db, $this->user, $this->password);
        }
        else { // try catch with exception ?
            echo 'DNS not supported, add a condition';
        }
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        return $db;
    }
}