<?php

class Dashboard extends Controller
{

    public function index()
    {
        $this->view('dashboard/index');
    }

    public function news()
    {
        $this->view('dashboard/news');
    }
}
