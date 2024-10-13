<?php

namespace controllers;

use core\Controller;
use models\Shares;

class SharesController extends Controller
{
    private $shareModel;

    public function __construct()
    {
        $this->shareModel = new Shares();
    }

    public function index(): void
    {
        $shares = $this->shareModel->getShares();
        $this->view('shares/shares', ['shares' => $shares]);
    }

    public function add(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $body = $_POST['body'];
            $link = $_POST['link'];
            $user_id = $_SESSION['user_id'];

            if ($this->shareModel->addShare($user_id, $title, $body, $link)) {
                header('Location: /Opdracht%203/mvcnl/index.php?controller=shares&action=shares');
                exit();
            } else {
                echo 'Failed to add share.';
            }
        } else {
            $this->view('shares/create_share');
        }
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $shareId = $_POST['id'];

            if ($this->shareModel->deleteShare($shareId)) {
                header('Location: /Opdracht%203/mvcnl/index.php?controller=shares&action=shares');
                exit();
            } else {
                echo 'Failed to delete share';
                exit();
            }
        } else {
            header('Location: /Opdracht%203/mvcnl/index.php?controller=shares&action=shares');
            exit();
        }
    }

}
