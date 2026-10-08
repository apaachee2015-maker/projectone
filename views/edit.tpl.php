
 <?php


 require VIEWS . '/incs/header.php';
 ?>

 <main class="main py-3">
     <div class="container">

         <div class="row">

             <div class="col-md-12">
                 <h1>Edit Post</h1>

                 <form action="" method="post">

                     <input type="hidden" name="id" value="<?=$post['id']?>">

                     <div class="mb3">
                         <label id="title" for="title" class="form-label">
                             Post Title
                         </label>
                         <input id="title" name="title" type="text" class="form-control" placeholder="Post title" value="<?= htmlspecialchars($post['title'])?>">

                     </div>
                     <div class="mb3">
                         <label for="excerpt" class="form-label" id="excerpt">Post Excerpt</label>
                         <textarea name="excerpt" id="excerpt" class="form-control" rows="3" placeholder="Post excerpt"><?= htmlspecialchars($post['excerpt'])?></textarea>

                     </div>

                     <div class="mb3">
                         <label for="content" class="form-label" id="content">Post Content</label>
                         <textarea name="content" id="content" class="form-control" rows="5" placeholder="Post content"><?= htmlspecialchars($post['content'])?></textarea>

                     </div>

                     <div class="mt-4">
                         <button name="create" type="submit" class="btn btn-primary">Edit
                         </button>
                     </div>

                 </form>


             </div>


         </div>
     </div>
 </main>


 <?php
 require_once VIEWS . '/incs/footer.php';
 ?>

