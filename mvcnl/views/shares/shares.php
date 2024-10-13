<?php
use models\Shares;

include_once __DIR__ . '/../../includes/class-autoload.inc.php';
include_once __DIR__ . '/../navbar.php';

$sharesObj = new Shares();
$shares = $sharesObj->getShares();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Shares</title>
</head>
<body>
<div class="container mt-5">
    <div class="text-right mb-3">
        <a href="/Opdracht%203/mvcnl/index.php?controller=shares&action=createShare" class="btn btn-success">Share Something</a>
    </div>

    <?php foreach ($shares as $share): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h4 class="card-title"><?php echo $share->title; ?></h4>
                <p class="text-muted"><?php echo $share->create_date; ?></p>

                <p class="card-text"><?php echo $share->body; ?></p>

                <a href="/Opdracht%203/mvcnl/index.php" class="btn btn-primary" target="_blank">Go To Website</a>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
