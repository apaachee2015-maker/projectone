<?php


if (isset($_POST['create']))
{
    $title = $_POST['title'];
    $excerpt = $_POST['excerpt'];
    $content = $_POST['content'];

    dbQuery("INSERT INTO posts (`title`, `excerpt`, `content`) VALUES (?, ?, ?)", [$title, $excerpt, $content]);

    header('Location: /');

}



require VIEWS . '/create.tpl.php';