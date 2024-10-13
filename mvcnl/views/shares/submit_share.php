<?php

use models\Shares;

include_once __DIR__ . '/../../includes/class-autoload.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $body = $_POST['body'];
    $link = $_POST['link'];
    $name = $_POST['name'];

    $sharesObj = new Shares();
    $sharesObj->addShare($title, $body, $link, $name);

    header('Location: shares.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Submit Share</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Submit a New Share</h1>
        <form method="POST" action="">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" class="form-control" id="link" name="link" required>
            </div>
            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" onclick="window.location.href='shares.php'">Cancel</button>
        </form>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html><?php
