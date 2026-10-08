
<?php

use Myfrm\Db;

$title = 'Apachee Blog About';


    $recent_posts = $db->query("SELECT * FROM posts ORDER BY id DESC LIMIT 5")->findAll() ;

    $post = 'California high school students are increasingly taking the SAT, as more universities are again requiring standardized tests for
             admission and as the University of California is debating whether to reinstate its test requirement amid concerns over academic preparedness.
        
            In all, 138,763 California class of 2026 students took the SAT, up 12.6% from the prior year — and the largest gain in three years — according 
            to data released Tuesday from the College Board, the nonprofit organization that develops and proctors the SAT.
            
            Though the UC and California State University systems do not use the SAT or other standardized tests in admissions decisions, 
            an increasing number of universities have reinstated testing requirements after many suspended them during the height of the pandemic, 
            including the University of Texas, all Ivy League schools, Stanford and Caltech.';


    require VIEWS . '/about.tpl.php';



