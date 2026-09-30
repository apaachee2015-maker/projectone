
 <?php
 require_once 'views/incs/header.php';
 ?>

    <main class="main py-3">
        <div class="container">

            <div class="row">


                <div class="col-md-8">
                    <h3>The posts or products</h3>

                    <?php foreach ($posts as $post) { ?>
                        <div class="card w-100 mt-2 mb-2">
                            <div class="card-body">
                                <h5 class="card-title"><a href="post?id=<?= $post['id']?>"><?= $post['title']?></a>
                                </h5>
                                <p class="card-text"><?= $post['excerpt']?> </p>
                                <a href="post?id=<?= $post['id']?>">Read more</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>

                <?php
                require_once 'views/incs/sidebar.php';
                ?>


            </div>
        </div>
    </main>


 <?php
 require_once 'views/incs/footer.php';
 ?>

