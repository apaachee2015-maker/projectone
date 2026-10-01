<?php


$id = $_GET['id'] ?? '';

$db = getConnection();

$post = dbQuery("SELECT * FROM posts WHERE id = ? ORDER BY id LIMIT 1", [$id])->fetch();
 //$post->fetch();
//dd($post);

//$stmt = $db->prepare("SELECT * FROM posts WHERE id = ? ORDER BY id LIMIT 1");
//$stmt->execute([$id]);
//$post = $stmt->fetch();
//dd($post);

if (!$post)
{
    abort();
}

$recent_posts = $db->query("SELECT * FROM posts ORDER BY id ASC LIMIT 4")->fetchAll();

require VIEWS . '/post.tpl.php';
