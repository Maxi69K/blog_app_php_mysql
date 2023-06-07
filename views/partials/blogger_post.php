<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-8 d-flex flex-column-reverse">
            <?php foreach ($posts as $post) : ?>
                <div class="card mb-3">
                    <div class="card-header d-flex justify-content-between">
                        <h5><?php echo $post->title; ?></h5>
                        <small><?php if (isset($_SESSION['logged_user']) && $post->user_id == $_SESSION['logged_user']->id) : ?>
                                <a href="index.php?post_id=<?php echo $post->id; ?>" class="btn btn-sm btn-secondary">Delete</a>
                            <?php endif; ?>
                        </small>
                    </div>
                    <div class="card-body">
                        <p><?php echo $post->description ?></p>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <button class="btn btn-success btn-sm">
                            <?php echo $user->getUserWithId($post->user_id)->name; ?>
                        </button>
                        <button class="btn btn-info btn-sm">
                            <?php echo $post->created_at ?>
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>