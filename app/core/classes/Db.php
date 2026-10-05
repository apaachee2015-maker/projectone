<?php

namespace Myfrm;
use PDO;
use PDOException;
use PDOStatement;

class Db
{
    protected $connection;

    public function __construct()
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

    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function query($query, $params = [])
    {
        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }



}