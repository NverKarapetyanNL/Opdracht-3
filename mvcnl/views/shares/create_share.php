<?php
include_once __DIR__ . '/../../includes/class-autoload.inc.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['user_id'])) {
    header('Location: /Opdracht%203/mvcnl/index.php?controller=users&action=login');
    exit();
}

include_once __DIR__ . '/../navbar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Share</title>
</head>
<body>
<div class="container mt-5">
    <h3>Share Something!</h3>
    <div class="card card-body bg-light mt-3">
        <form action="/Opdracht%203/mvcnl/index.php?controller=shares&action=createShare" method="POST">
            <div class="form-group">
                <label for="title">Share Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" required>
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" rows="3" placeholder="Describe your share" required></textarea>
            </div>
            <div class="form-group">
                <label for="link">Link</label>
                <input type="url" class="form-control" id="link" name="link" placeholder="https://example.com" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="/Opdracht%203/mvcnl/index.php?controller=shares&action=index" class="btn btn-danger">Cancel</a>
        </form>
    </div>
</div>
