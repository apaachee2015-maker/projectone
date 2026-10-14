<?php


use Myfrm\Db;

/**
* @var $db
 */
    $id = $_GET['id'] ?? '';

    if (isset($_GET['action']) && $_GET['action'] === 'like')
        {
        //    dd("YOOO");
            $db->query("UPDATE posts SET likes = likes + 1 WHERE id = ?", [$id]);
            header("Location: /post?id=" . $id);
            exit();
        }
    if (isset($_GET['action']) && $_GET['action'] === 'dislike')
        {
            $db->query("UPDATE posts SET dislikes = dislikes + 1 WHERE id = ?", [$id]);
            header("Location: /post?id=" . $id);
            exit();
        }


    $post = $db->query("SELECT * FROM posts WHERE id = ? ORDER BY id LIMIT 1", [$id])->find();

    if (!$post)
        {
            abort();
        }

    $recent_posts = $db->query("SELECT * FROM posts ORDER BY id ASC LIMIT 4")->findAll();



    require VIEWS . '/post.tpl.php';


