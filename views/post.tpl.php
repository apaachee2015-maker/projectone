
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

                                <?php if (!empty($post['image'])): ?>

                                        <img src="/post-images/<?= htmlspecialchars($post['image']) ?>" alt="<?= htmlspecialchars($post['title']) ?>" class="img-fluid" style="max-height: 400px; border-radius: 6px;">

                                <?php endif; ?>
                                <h5 class="card-title"><?= $post['title'] ?></h5>
                                <h6 class="card-title"><?= $post['excerpt'] ?></h6>
                                <p class="card-text"><?= $post['content'] ?> </p>

                            </div>

                        </div>

                    <div class="col-md-4">
                            <form action="" method="post">
                                <div class="mt-4">
                                    <button name="delete" type="submit" class="btn btn-danger">
                                        Delete
                                    </button>
                                </div>
                            </form>

                            <form action="" method="post">
                                <div class="mt-4">
                                    <a class="btn btn-primary" href="/edit-post?id=<?= $post['id']?>">Edit Post</a>
                                </div>
                            </form>
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
