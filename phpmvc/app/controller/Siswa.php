<?php
class Siswa extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Data Siswa",
            "Siswa" => $this->model('siswa_model')->getAllBlog()
        ];
        $this->view('template/header', $data);
        $this->view('siswa/index', $data);
        $this->view('template/footer');
        return $this->view("siswa/index", $data);
    }
    public function detail($id) {
        $data["siswa"] = $this->model("siswa_model")->getAllBlogById($id);
        $this->view('template/header', $data);
        $this->view('siswa/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if ($this->model('siswa_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('gagal', 'ditambah', 'sucess');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('bergasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }

    }
    public function hapus($id)
    {
        if ($this->model('siswa_model')->hapusDataSiswa($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'sucess');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/siswa');
            exit;
        }


    }
    public function getubah()
{
    if( $this->model('siswa_model')->ubahDataSiswa($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/siswa');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASE_URL . '/siswa');
     exit;
}
}

}
