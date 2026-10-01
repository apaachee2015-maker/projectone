<?php

function getConnection()
{
        static $pdo = null;

        if ($pdo === null)
        {
            $db_user = 'root';
            $db_password = null;
            $db_host = 'localhost';
            $db_name = 'blog_db';
            $db_charset = 'utf8mb4';
            $db_options = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];

            $dsn = "mysql:host={$db_host};dbname={$db_name};charset={$db_charset}";

            try {
                $pdo = new PDO($dsn, $db_user, $db_password, $db_options);
            }
            catch (PDOException $e)
            {
                die("Db Connection Error: " . $e->getmessage());
            }
        }


        return $pdo;

}

function abort($code = 404)
{
    http_response_code($code);
    require VIEWS . "/errors/{$code}.tpl.php";
    die();
}

function dbQuery( $query, $params = [])
{
    $db = getConnection();
    $stmt = $db->prepare($query);
    $stmt->execute($params);
//    $stmt->fetch();
    return $stmt;
}


function dump($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";

}

function print_arr($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";

}

function dd($data)
{
    dump($data);
    die();

}