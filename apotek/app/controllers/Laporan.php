<?php

class Laporan extends Controller
{

    public function index()
    {
        $data['judul'] = 'Laporan';
        $this->view('templates/sidebar', $data);
        $this->view('laporan/index', $data);
    }
}
