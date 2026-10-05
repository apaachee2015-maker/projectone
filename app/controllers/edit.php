<?php

use Myfrm\Db;

$db = new Db();

if ($_POST['edit'])
{
    $fillable = ['title', 'excerpt', 'content'];
    $data = loadData($fillable);
    dump($data['id']);
    dd($data);
    $data['id'] = $_GET['id'];
    $db->query("UPDATE posts SET title=:title, excerpt=:excerpt, content=:content WHERE id =:id",$data);
}

require VIEWS .
