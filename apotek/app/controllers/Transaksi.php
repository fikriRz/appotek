<?php

class Transaksi extends Controller
{

    public function index()
    {
        $data['judul'] = "Transaksi";
        $data['trans'] = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
    }

    public function cari()
    {
        $data['judul'] = "Transaksi";
        $data['obat'] = $this->model('Transaksi_model')->cariDataObat();
        $data['trans'] = $this->model('Transaksi_model')->getAllTransaksi();
        $this->view('templates/sidebar', $data);
        $this->view('transaksi/index', $data);
    }

    public function tambah($id_obat)
    {
        if ($this->model('Transaksi_model')->tambahTrans($id_obat) > 0) {
            header('Location:' . BASEURL . '/transaksi/');
            exit;
        }
    }

    public function hapus($id_detail)
    {
        if ($this->model('Transaksi_model')->hapusDataDetail($id_detail) > 0) {
            header('Location:' . BASEURL . '/transaksi');
            exit;
        }
    }
}
