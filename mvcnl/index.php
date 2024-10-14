<?php

use controllers\SharesController;
use controllers\UsersController;

session_start();
include_once __DIR__ . '/includes/class-autoload.inc.php';
include_once __DIR__ . '/views/navbar.php';


$action = $_GET['action'] ?? 'home';

if ($action === 'login') {
    $controller = new UsersController();
    $controller->login();
} elseif ($action === 'logout') {
    $controller = new UsersController();
    $controller->logout();
} elseif ($action === 'register') {
    $controller = new UsersController();
    $controller->register();
} elseif ($action === 'shares') {
    $controller = new SharesController();
    $controller->index();
} elseif ($action === 'createShare') {
    $controller = new SharesController();
    $controller->add();
} elseif ($action === 'deleteShare') {
    $controller = new SharesController();
    $controller->delete();
} else {
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shareboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container text-center mt-5">
    <h1>Welcome To ShareBoard</h1>
    <p>Find something cool? Share it with our community. Look at other shares as well</p>

    <a href="/Opdracht%203/mvcnl/index.php?controller=shares&action=createShare" class="btn btn-primary">Share Now</a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
