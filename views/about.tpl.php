
<?php
require_once VIEWS . '/incs/header.php';
?>


    <main class="main py-3">
        <div class="container">

            <div class="row">


                <div class="col-md-8">
                    <h3>The posts or products</h3>


                        <div class="card w-100 mt-2 mb-2">
                            <div class="card-body">
                                <h5 class="card-title">About my blog</h5>
                                <p class="card-text"><?= $post ?> </p>

                            </div>
                        </div>

                </div>

                <?php
                require_once VIEWS . '/incs/sidebar.php';
                ?>



            </div>
        </div>
    </main>

<?php
require_once VIEWS . '/incs/footer.php';
?>
