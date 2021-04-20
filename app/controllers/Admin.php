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
        $data = [$this->model('User_model')->getAdminById($_SESSION['auth']['id'])];
        $this->view('admin/admin', $data);
    }
}
