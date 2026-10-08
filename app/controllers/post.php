<?php


use Myfrm\Db;

$id = $_GET['id'] ?? '';

//$db = Db::getInstance()->getConnection();

$post = $db->query("SELECT * FROM posts WHERE id = ? ORDER BY id LIMIT 1", [$id])->find();

if (!$post)
{
    abort();
}

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id ASC LIMIT 4")->findAll();



    if ($_SERVER['REQUEST_METHOD'] === 'POST')
    {

        $db->query("DELETE FROM posts WHERE id = ?", [$id]);
        header('location: /');
    }


require VIEWS . '/post.tpl.php';


