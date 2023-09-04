<?php
class siswa_model
{
    private $table = 'data_siswa';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM  . $this->table");
        return $this->db->resultAll();
    }
    public function getAllBlogById($id)
    {

        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = "INSERT INTO " . $this->table . ' ( nama, jenis_kelamin, NISN) VALUES (:nama, :jenis_kelamin, :NISN)';
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('NISN', $data['NISN']);

        return $this->db->execute();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM data_siswa WHERE `data_siswa`.`id` = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataSiswa($id)
    {
        $query = "DELETE FROM data_siswa WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataSiswa($data){
        $query = "UPDATE data_siswa SET nama = :nama,
        jenis_kelamin = :jenis_kelamin,
        NISN = :NISN
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('NISN', $data['NISN']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        }
  
    }

