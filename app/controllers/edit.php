<?php


/**
* @var $db \Myfrm\Db;
 * */
$id = $_GET['id'] ?? '';

if (!$id) {
    abort();
}

// 1. Сначала всегда получаем пост по id, чтобы передать его в форму
$post = $db->query("SELECT * FROM posts WHERE id = ?", [$id])->find();

if (!$post) {
    abort();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $fillable = ['title', 'excerpt', 'content'];
    $data = loadData($fillable);

    $data['id'] = $_POST['id'] ?? $id;
    $db->query("UPDATE posts SET title=:title, excerpt=:excerpt, content=:content WHERE id =:id",$data);

    header("Location: /post?id=" . $id);
    exit;
}

require VIEWS . '/edit.tpl.php';
