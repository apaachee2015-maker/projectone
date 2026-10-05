<?php


use Myfrm\Db;

$id = $_GET['id'] ?? '';

$db = new Db();

$post = $db->query("SELECT * FROM posts WHERE id = ? ORDER BY id LIMIT 1", [$id])->fetch();

if (!$post)
{
    abort();
}

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id ASC LIMIT 4")->fetchAll();

require VIEWS . '/post.tpl.php';


