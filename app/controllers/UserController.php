<?php
include_once "app/models/UserModel.php";
include_once "app/models/CityModel.php";

class UserController
{
    protected $userModel;
    protected $cityModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        $this->cityModel = new CityModel();
    }

    public function showAll()
    {
        $users = $this->userModel->getAll();
        include_once "app/views/user/list.php";
    }

    public function create()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $cities = $this->cityModel->getAll();
            include_once "app/views/user/create.php";
        } else {
            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                } else {
                    echo "upload khong thanh cong";
                }
                $_REQUEST["image"] = $nameImage;
            }
            try {
                $this->userModel->store($_REQUEST);
                header("location:index.php?page=user-list");
            } catch (PDOException $e) {
                echo("ERROR" . $e->getMessage());
            }
        }
    }

    public function delete()
    {
        if (isset($_REQUEST['id'])) {
            $this->userModel->delete($_REQUEST['id']);
            header("location:index.php?page=user-list");
        } else {
            header("location:index.php?page=user-list");
        }
    }

    public function edit()
    {
        if (isset($_REQUEST['id'])) {
            $user = $this->userModel->getById($_REQUEST['id']);
            $cities = $this->cityModel->getAll();
            include_once "app/views/user/update.php";
        }
    }

    public function update()
    {
//        var_dump($_REQUEST);
//        die();
        if (isset($_REQUEST['id'])) {
            $user = $this->userModel->getById($_REQUEST["id"]);
            $_REQUEST["image"] = $user->image;

            if (isset($_FILES["fileUpToLoad"])) {
                $targetFolder = "upload/";
                $nameImage = time() . basename($_FILES["fileUpToLoad"]["name"]);
                $targetFile = $targetFolder . $nameImage;
                if (move_uploaded_file($_FILES["fileUpToLoad"]["tmp_name"], $targetFile)) {
                    echo "upload thanh cong";
                    $_REQUEST["image"] = $nameImage;
                } else {
                    echo "upload khong thanh cong";
                }

            }

            $this->userModel->update($_REQUEST);
            $user = $this->userModel->getByEmail($user->email);
            $_SESSION['user'] = $user;
            header("location:index.php?page=user-list");
        }
    }

    public function detail()
    {
        if (isset($_REQUEST['id'])) {
            $user = $this->userModel->getById($_REQUEST['id']);
            include_once "app/views/user/detail.php";
        }
    }

    public function search()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $users = $this->userModel->search($_REQUEST['search']);
            include_once "app/views/user/list.php";
        }
    }
}