
<?php
    $title = 'Apachee Blog';
    use Myfrm\Db;


//  $id = $_GET['id'] ?? '';

//  $db = Db::getInstance()->getConnection();

//  $db = getConnection();
  $posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->findAll();
  $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->findAll() ;


    require VIEWS . '/index.tpl.php';



