<body>
    <div class="container mt-5">
      <div class="card" style="whith: 18rem;">
      <div class="card-body">
        <h5 class="card-title"><?= $data['siswa']['nama']; ?></h5>
        <h6 class="class-subtitle mb-2 text-muted"><?= $data['siswa']['jenis_kelamin']; ?></h6>
        <p class="card_text"><?= $data['siswa']['NISN']; ?></P>
        <a href=" <?= BASE_URL; ?>/siswa"class="clard-link">kembali</a>
            </div>
        </div>
    </div>
</body>