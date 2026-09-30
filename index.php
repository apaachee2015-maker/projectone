
<?php
    $title = 'Apachee Blog';

  require 'config/helper_functions.php';

//  $id = $_GET['id'] ?? '';

  $db = getConnection();
  $posts = $db->query("SELECT * FROM posts ORDER BY id DESC")->fetchall();
  $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5") ;


    require 'views/index.tpl.php';



