
<?php
    $title = 'Apachee Blog';
    use Myfrm\Db;


//  $id = $_GET['id'] ?? '';

//  $db = Db::getInstance()->getConnection();

//  $db = getConnection();
  $posts = $db->query("SELECT posts.*, categories.title AS category_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id  WHERE is_published = 1 ORDER BY posts.id DESC")->findAll();
  $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->findAll() ;



$db->query("SELECT posts.*, categories.title AS category_title FROM posts LEFT JOIN categories ON posts.category_id = categories.id WHERE is_published = 1 ORDER BY posts.id DESC ")->findAll();
    require VIEWS . '/index.tpl.php';



