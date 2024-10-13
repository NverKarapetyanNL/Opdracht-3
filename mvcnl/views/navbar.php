<?php
?>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/Opdracht%203/mvcnl/index.php">Shareboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/Opdracht%203/mvcnl/index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/Opdracht%203/mvcnl/index.php?controller=shares&action=shares">Shares</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if (isset($_SESSION['user_id'])): ?>
                <li class="nav-item">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <span class="navbar-text">Welcome <?php echo $_SESSION['user_name']; ?></span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="/Opdracht%203/mvcnl/index.php?controller=users&action=logout">Logout</a>
                    </li>
                <?php endif; ?>

                </li>
            <?php else: ?>
                <li class="nav-item">
                    <a class="nav-link" href="/Opdracht%203/mvcnl/index.php?controller=users&action=login">Login</a>

                </li>
                <li class="nav-item">
                    <a class="nav-link"
                       href="/Opdracht%203/mvcnl/index.php?controller=users&action=register">Register</a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


