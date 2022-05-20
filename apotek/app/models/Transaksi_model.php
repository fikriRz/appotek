<?php

class Transaksi_model
{

    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function cariDataObat()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM obat WHERE nama_obat like :keyword OR jenis_obat like :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }

    public function tambahTrans($id_obat)
    {

        $this->db->query('INSERT INTO detail VALUES (:id_detail, :id_obat)');
        $this->db->bind('id_detail', $id_obat);
        $this->db->bind('id_obat', $id_obat);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getAllTransaksi()
    {
        $query = "SELECT obat.*, detail.* FROM obat INNER JOIN detail on obat.id_obat=detail.id_obat";
        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function hapusDataDetail($id_detail)
    {
        $query = 'DELETE FROM detail WHERE id_detail=:id_detail';
        $this->db->query($query);
        $this->db->bind('id_detail', $id_detail);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
