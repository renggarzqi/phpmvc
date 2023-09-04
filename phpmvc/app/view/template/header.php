<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://localhost/phpmvc/public/css/boostrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL; ?>">RENGGA WEB</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
        aria-controls="navbarNavAltMaarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/ahli">Kompentensi Keahlian</a>   
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/guru">Data Guru</a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/siswa">Data Siswa</a>
            <a class="nav-item nav-link " href="<?= BASE_URL; ?>/user/profile">About</a>
        </div>
    </div>
    </div>
</nav>
</body>
</html>