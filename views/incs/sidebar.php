

<div class="col-md-4">
    <h3>Recent posts</h3>
    <?php foreach ($recent_posts as $recent_post) { ?>
        <ul class="list-group">
            <li class="list-group-item"><a href="posts?id="><?= $recent_post['excerpt'] ?></a>
        </li>
    <?php } ?>
</div>