<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Blogger</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-grow-0" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <?php if (isset($_SESSION['logged_user'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="add_post.php">Add Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link bg-success text-white rounded" href="index.php"><?php echo $_SESSION['logged_user']->name; ?></a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login_register.php">Login/Register</a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<div class="py-5">
    <h4 class="mb-0 text-center">Blogger Posts</h4>
</div>