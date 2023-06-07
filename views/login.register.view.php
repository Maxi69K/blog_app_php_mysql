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
            </ul>
        </div>
    </div>
</nav>
<div class="py-5">
    <h4 class="mb-0 text-center">Login/Register</h4>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sm-6 col-xl-5 col-xxl-3 mt-3">
            <h4 class="mb-5">Login</h4>
            <form action="login_register.php" method="post"><br>
                <input type="text" name="login_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="login_password" placeholder="password" class="form-control" required><br>
                <button type="submit" class="form-control btn btn-primary" name="loginBtn">Login</button>
            </form>
            <?php if ($user->logged_user) : ?>
                <div class="alert alert-success mt-5 text-center">Successful login! <a class="link-underline link-underline-opacity-0" href="index.php">Go to Blog &raquo;</a></div>
            <?php elseif (isset($_POST['loginBtn'])) : ?>
                <div class="alert alert-danger mt-5 text-center">Username and password wrong!</div>
            <?php endif; ?>
        </div>
        <div class="col-sm-6 col-xl-5 col-xxl-3 mt-3">
            <h4>Register</h4>
            <form action="login_register.php" method="post">
                <input type="text" name="register_name" placeholder="name" class="form-control" required><br>
                <input type="email" name="register_email" placeholder="email" class="form-control" required><br>
                <input type="password" name="register_password" placeholder="password" class="form-control" required><br>
                <button type="submit" class="form-control btn btn-warning" name="registerBtn">Register</button>
            </form>
            <?php if ($user->register_result) : ?>
                <div class="alert alert-success mt-5 text-center">Successful registration!</div>
            <?php endif; ?>
        </div>
    </div>
</div>

<?php require_once 'partials/bottom.php' ?>