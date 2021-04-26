<?php

class Dashboard extends Controller
{

    public function index()
    {
        $this->view('dashboard/index');
    }

    public function news()
    {
        $data = [$this->model('User_model')->getAllBerita()];
        $this->view('dashboard/news', $data);
    }

    public function employe()
    {
        $this->view('dashboard/employe');
    }
}
