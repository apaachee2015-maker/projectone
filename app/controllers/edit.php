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

    $image_name = $post['image'];
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK)
    {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = time() . '-' . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], UPLOAD_IMG . '/' . $image_name);


    }

    $_POST['is_published'] = isset($_POST['is_published']) ? 1 : 0;
    $fillable = ['title', 'excerpt', 'content', 'is_published'];
    $data = loadData($fillable);

    $data['id'] = $_POST['id'] ?? $id;

    $data['image'] = $image_name;
    $db->query("UPDATE posts SET title=:title, excerpt=:excerpt, content=:content, image=:image, is_published=:is_published WHERE id =:id",$data);

    header("Location: /post?id=" . $id);
    exit;
}

require VIEWS . '/edit.tpl.php';
