<?php
class Guru extends Controller
{
    public function index()
    {
        $data = [
            "judul" => "Data guru",
            "guru" => $this->model('guru_model')->getAllBlog()
        ];
        $this->view('template/header', $data);
        $this->view('guru/index', $data);
        $this->view('template/footer');
        return $this->view("guru/index", $data);
    }
    public function detail($id) {
        $data["guru"] = $this->model("guru_model")->getAllguruById($id);
        $this->view('template/header', $data);
        $this->view('guru/detail', $data);
        $this->view('template/footer');
    }
    public function tambah()
    {
        if ($this->model('guru_model')->tambahData($_POST) > 0) {
            Flasher::setFlash('gagal', 'ditambah', 'sucess');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }

    }
    public function hapus($id)
    {
        if ($this->model('guru_model')->hapusDataguru($id) > 0) {
            Flasher::setFlash('berhasil', 'dihapus', 'sucess');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        } else {
            Flasher::setFlash('gagal', 'dihapus', 'danger');
            header('Location: ' . BASE_URL . '/guru');
            exit;
        }


    }
    public function getubah()
{
    if( $this->model('guru_model')->ubahDataguru($_POST) > 0 ) {
        Flasher::setFlash('berhasil', 'diubah', 'success');
        header('Location: ' . BASE_URL . '/guru');
        exit;
    } else {
        Flasher::setFlash('gagal', 'diubah', 'danger');
        header('Location: ' . BASE_URL . '/guru');
     exit;
}
}

}