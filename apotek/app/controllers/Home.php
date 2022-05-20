<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/sidebar', $data);
        $this->view('home/index', $data);
    }
}
