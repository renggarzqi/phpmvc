<?php
class guru_model
{
    private $table = 'data_guru';
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
    public function getAllguruById($id)
    {

        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id ');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data)
    {
        $query = "INSERT INTO " . $this->table . ' ( nama, mapel) VALUES (:nama, :mapel, )';
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mapel', $data['mapel']);
        

        return $this->db->execute();
    }
    public function hapusData($id)
    {
        $query = "DELETE FROM data_guru WHERE `data_guru`.`id` = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataguru($id)
    {
        $query = "DELETE FROM data_guru WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
    public function ubahDataguru($data){
        $query = "UPDATE data_guru SET nama = :nama,
        mapel = :mapel,
        NIP = :NIP
        WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('mapel', $data['mapel']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        }
  
    }