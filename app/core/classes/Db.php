<?php

namespace Myfrm;
use PDO;
use PDOException;
use PDOStatement;

class Db
{
    protected $connection;
    protected PDOStatement $stmt;
    private static $instance = null;

    private function __construct()
    {

    }



    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
            self::$instance->getConnection();
        }
        return self::$instance;
    }

    private function getConnection()
    {
        [
            'host' => $db_host,
            'dbname' => $db_name,
            'charset' => $db_charset,
            'username' => $db_user,
            'password' => $db_password,
            'options' => $db_options

        ] = require CONFIG . '/db.php';

        $dsn = "mysql:host=$db_host;dbname=$db_name;charset=$db_charset";
        $this->connection = new PDO($dsn, $db_user, $db_password, $db_options);

        return $this;
    }

    public function query($query, $params = [])
    {
        $this->stmt = $this->connection->prepare($query);
        $this->stmt->execute($params);
        return $this;
    }


    public function findAll()
    {
        return $this->stmt->fetchAll();
    }
    public function find()
    {
        return $this->stmt->fetch();
    }


}