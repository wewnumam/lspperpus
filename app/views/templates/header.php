<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">LSP PERPUS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-item nav-link" href="<?= BASEURL; ?>">Home</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/buku">Buku</a>
          <a class="nav-item nav-link" href="<?= BASEURL; ?>/peminjaman">Peminjaman</a>
        </div>
      </div>
      <?php if(isset($_SESSION['login'])): ?>
        <a class="nav-item nav-link text-danger" href="<?= BASEURL; ?>/pengguna/keluar"><?= $_SESSION['username'] ?></a>
      <?php else: ?>
        <a class="nav-item nav-link" href="<?= BASEURL; ?>/pengguna/masuk">Masuk</a>
      <?php endif ?>
  </div>
</nav>