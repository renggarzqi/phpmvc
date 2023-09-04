<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambahkan Data Guru
            </button>
            <h3>DATA GURU</h3>
            <ul class="list-group">
                <?php foreach ($data['guru'] as $guru) : ?>
                    <li class="list-group-item list-group-item d-flex justify-content-between align-items-center">
                        <?= $guru['nama']; ?>
                        <div class="fload-end">
                            <a href="<?= BASE_URL; ?>/guru/detail/<?= $guru['id']; ?>" class="btn btn-primary btn-sm">Detail</a>
                            <button type="button" class="btn btn-success btn-sm" onclick="ubah_data(this)" data-id="ubah_<?= $guru['id']; ?>">Ubah</button>
                            <a href="<?= BASE_URL; ?>/guru/hapus/<?= $guru['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                        </div>
                        </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php foreach ($data['guru'] as $i) : ?>
        <div class="ubah" id="ubah_<?= $i['id']; ?>">
            <div class="content-ubah">
                <span class="close" style="float: right; font-size : 15;" onclick="cl_ubah(this)" data-id-cl="ubah_<?= $i['id']; ?>">&times</span>
                <h4 class="mb-3">Ubah Data Guru</h4>
                <form action="<?= BASE_URL; ?>/guru/getubah" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $i['id']; ?>">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" value="<?= $i['nama']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="mapel" class="form-label">Mapel</label>
                        <input type="text" class="form-control" id="mapel" name="mapel" value="<?= $i['mapel']; ?>">
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="<?= BASE_URL; ?>/guru/tambah" method="post">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama">
                        </div>
                        <div class="form-group">
                            <label for="mapel">Mapel</label>
                            <input class="form-control" id="mapel" name="mapel">
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