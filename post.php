<?php



$id = $_GET['id'] ?? '';

require 'config/helper_functions.php';
$db = getConnection();

$post = $db->query("SELECT * FROM posts")->fetch();
$recent_posts = $db->query("SELECT * FROM posts ORDER BY id ASC LIMIT 4")->fetchAll();

require 'views/post.tpl.php';
