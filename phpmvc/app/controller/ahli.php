<?php
class Ahli extends Controller
{
    public function index()
    {
        $data['judul'] = "Ahli";
        $data['ahli'] = $this->model('ahli_model')->getAllahli();
        $this->view('template/header', $data);
        $this->view('ahli/index', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
         if ($this->model('siswa_model')->tambahData($_POST)  >  0){
            header('Location: ' .BASE_URL . '/siswa');
            exit;
         }
    }
}