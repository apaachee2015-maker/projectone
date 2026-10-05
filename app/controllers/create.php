<?php
use  Myfrm\Db;

$db = new Db();

if (isset($_POST['create']))
{

    $fillable = ['title', 'excerpt', 'content'];
    $data = loadData($fillable);

    $db->query("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (?, ?, ?)", [$data['title'],$data['excerpt'],$data['content']]);

    header('Location: /');

}



require VIEWS . '/create.tpl.php';