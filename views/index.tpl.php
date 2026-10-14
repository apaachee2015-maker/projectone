
 <?php
 require_once VIEWS . '/incs/header.php';
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

                                <?php if (!empty($post['image'])): ?>
                                    <div class="mb-2">
                                        <img src="/post-images/<?= htmlspecialchars($post['image']); ?>" alt="" style="max-height: 120px; border-radius: 4px; display: block; margin-bottom: 5px;">

                                    </div>
                                <?php endif; ?>
                                <a href="/post?id=<?= $post['id'] ?>&action=like" class="btn btn-outline-danger btn-sm">
                                    👍  (<?= $post['likes'] ?? 0 ?>)
                                </a>
                                <small class="text-muted"> Published at : <?= date('d-m-Y', strtotime($post['created_at'])) ?></small>

                            </div>
                        </div>
                    <?php } ?>
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

