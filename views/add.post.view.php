<?php require_once 'partials/top.php' ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Blogger</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Back to Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="py-5">
    <h4 class="mb-0 text-center">Add New Post</h4>
</div>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-8 col-lg-6 col-xxl-4">
            <form action="add_post.php" method="post">
                <input type="text" name="post_title" placeholder="title" class="form-control"><br>
                <textarea name="post_description" class="form-control" placeholder="description" cols="30" rows="10"></textarea><br>
                <button type="submit" name="post-sub-btn" class="form-control btn btn-primary">Add</button>
            </form>
            <?php if ($post->new_post_status) : ?>
                <div class="alert alert-success mt-5 text-center">New post inserted!</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php' ?>