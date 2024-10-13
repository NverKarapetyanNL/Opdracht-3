<?php

use models\Shares;

include_once __DIR__ . '/../../includes/class-autoload.inc.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $shareId = $_POST['id'];
    $sharesObj = new Shares();

    if ($sharesObj->deleteShare($shareId)) {
        $sharesObj = new Shares();
        header('Location: /Opdracht%203/mvcnl/index.php?controller=shares&action=index');
    } else {
        echo 'Failed to delete share';
        exit();
    }
}
