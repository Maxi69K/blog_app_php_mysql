<?php 
require_once 'bootstrap.php';

if (!isset($_SESSION['logged_user'])) {
    header('Location: index.php');
}

if (isset($_POST['post-sub-btn'])) {
    $post->createPost();
}

require_once 'views/add.post.view.php';