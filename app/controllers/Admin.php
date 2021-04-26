<?php

class Admin extends Controller
{

    public function sessionCheck()
    {
        if (!isset($_SESSION['auth'])) {
            header('Location: ' . BASEURL . '/auth');
            exit();
        }
    }

    public function index()
    {
        $this->sessionCheck();
        $data = [$this->model('User_model')->getAllBerita()];
        $this->view('admin/index', $data);
    }

    public function insertNews()
    {
        $this->model('User_model')->insertNews($_POST);
        header('Location: ' . BASEURL . '/admin/index');
    }
}
