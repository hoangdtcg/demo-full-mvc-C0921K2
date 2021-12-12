<?php
include_once "app/models/UserModel.php";

class AuthController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function showFormLogin()
    {
        if (isset($_SESSION['user'])) {
            header("location:index.php?page=user-list");
        }
        include_once "app/views/auth/login.php";
    }

    public function login($request)
    {
        $email = $request['email'];
        $password = $request['password'];
        if ($this->userModel->checkLogin($email, $password)) {
            $user = $this->userModel->getByEmail($email);
            $_SESSION['user'] = $user;
            header("location:index.php?page=post-list");
        } else {
            header("location:index.php?page=login");
        }
    }

    public function logOut()
    {
        session_destroy();
        header("location:index.php?page=login");
    }

}