<?php


/**
* @var $db \Myfrm\Db;
 * */

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

    $image_name = null;
    if (!empty($_FILES['image']['name']) && $_FILES['image']['error'] === UPLOAD_ERR_OK)
    {
        $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $image_name = time() . '_' . uniqid() . '.' . $ext;
        move_uploaded_file($_FILES['image']['tmp_name'], UPLOAD_IMG . '/' . $image_name);
    }

    $_POST['is_published'] = isset($_POST['is_published']) ? 1 :0;

    $fillable = ['title', 'excerpt', 'content', 'is_published'];
    $data = loadData($fillable);

    $data['image'] = $image_name;

    $db->query("INSERT INTO posts (`title`, `excerpt`, `content`, `image`, `is_published`) VALUES (:title, :excerpt, :content, :image, :is_published)", $data);

    header('Location: /');
    exit();

}



require VIEWS . '/create.tpl.php';