<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambahkan Data Siswa
            </button>
            <h3>DATA SISWA</h3>
            <ul class="list-group">
                <?php foreach ($data['Siswa'] as $siswa) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $siswa['nama']; ?>
                        <div class="fload-end">
                            <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            <button type="button" class="btn btn-success btn-sm" onclick="ubah_data(this)" data-id="ubah_<?= $siswa['id']; ?>">Ubah</button>
                            <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </div>
                        </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php foreach ($data['Siswa'] as $i) : ?>
        <div class="ubah" id="ubah_<?= $i['id']; ?>">
            <div class="content-ubah">
                <span class="close" style="float: right; font-size : 15;" onclick="cl_ubah(this)" data-id-cl="ubah_<?= $i['id']; ?>">&times</span>
                <h4 class="mb-3">Ubah Data Siswa</h4>
                <form action="<?= BASE_URL; ?>/siswa/getubah" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $i['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $i['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                            <?php
                            if ($i['jenis_kalamin'] == 'Laki-Laki') {
                                echo '<option value="Laki-Laki" selected>Laki-Laki</option><option value="Perempuan">Perempuan</option>';
                            } else if ($i['jenis_kelamin'] == 'Perempuan') {
                                echo '<option value="Laki-Laki">Laki-Laki</option><option value="Perempuan" selected>Perempuan</option>';
                            } else {
                                echo '<option value="Laki-Laki" >Laki-Laki</option><option value="Perempuan">Perempuan</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                        <button type="button" class="btn btn-secondary" onclick="cl_ubah(this)" data-id-cl="ubah_<?= $i['id']; ?>">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endforeach; ?>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">Jenis Kelamin</label>
                            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="laki-laki">Laki - laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                </div>
            </div>
            </div>
    </div>
</div>
<style>
    .content-ubah {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 40%;
        border-radius: 7px;
    }

    .ubah {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 4%;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.4);
    }

    .close_ubah:hover,
    .close_ubah:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }
</style>
<script>
    function ubah_data(obj) {
        document.getElementById(obj.getAttribute('data-id')).style.display = 'block'
    }

    function cl_ubah(obj) {
        document.getElementById(obj.getAttribute('data-id-cl')).style.display = 'none'
}
</script>