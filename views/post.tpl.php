
<?php
require_once 'incs/header.php';
?>


    <main class="main py-3">
        <div class="container">

            <div class="row">


                <div class="col-md-8">
                    <h3>The posts or products</h3>


                        <div class="card w-100 mt-2 mb-2">
                            <div class="card-body">
                                <h5 class="card-title"><?= $post['title'] ?></h5>
                                <h3 class="card-title"><?= $post['excerpt'] ?></h3>
                                <p class="card-text"><?= $post['content'] ?> </p>

                            </div>
                        </div>

                </div>

                <?php
                require_once 'incs/sidebar.php';
                ?>



            </div>
        </div>
    </main>

<?php
require_once 'incs/footer.php';
?>
