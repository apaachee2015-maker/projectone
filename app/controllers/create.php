<?php
use  Myfrm\Db;

//$db = Db::getInstance()->getConnection();

if (isset($_POST['create']))
{

    $fillable = ['title', 'excerpt', 'content'];
    $data = loadData($fillable);

    $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (:title, :excerpt, :content)", [
        'title'   => $data['title'],
        'excerpt' => $data['excerpt'],
        'content' => $data['content']
    ]);

    header('Location: /');

}



require VIEWS . '/create.tpl.php';