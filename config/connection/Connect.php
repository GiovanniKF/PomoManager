<?php

namespace PomoConfig\Connection;

use PDO;
use PDOException;

const HOST = 'localhost';
const DATABASENAME = 'db_pomomanager';
const USER = 'root';
const PASSWORD = '';

class Connect
{
    public $connection;

    function __construct()
    {
        $this->connectDatabase();
    }

    function connectDatabase(): void
    {
        try
        {
            $this->connection = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME, USER, PASSWORD);
        }
        catch (PDOException $e) {
            echo "Erro:".$e->getMessage();
            die();
        }
    }
}