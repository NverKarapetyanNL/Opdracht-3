<?php

namespace controllers;

use core\Controller;
use models\Users;

class UsersController extends Controller
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new Users();
    }

    public function register(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            if ($this->userModel->register($name, $email, $password)) {
                header('Location: /Opdracht%203/mvcnl/index.php?controller=users&action=login');
            } else {
                echo "Registration failed";
            }
        } else {
            $this->view('users/register');
        }
    }

    public function login(): void
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $user = $this->userModel->login($email, $password);
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user->id;
                $_SESSION['user_name'] = $user->name;
                header('Location: /Opdracht%203/mvcnl/index.php?controller=shares&action=index');
            } else {
                echo "Login failed";
            }
        } else {
            $this->view('users/login');
        }
    }

    public function logout() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }

        session_destroy();
        $_SESSION = [];
        header('Location: /Opdracht%203/mvcnl/index.php?controller=users&action=login');
        exit();
    }

}
