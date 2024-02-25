<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage - Museum Brawijaya Malang</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
      background-color: #5347D8;
      font-family: 'Poppins', sans-serif;
    }
    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
    }
    .header h4 {
      color: #fff;
      padding-top: 5px;
      font-weight: bold;
    }
    .content {
      padding: 50px;
      color: #fff;
    }
    .content h2, .content h4 {
      color: #fff;
    }
    .btn-custom {
      background-color: #fff;
      /*border-radius: 20px;*/
      width: 237px;
      height: 70px;
      font-weight: bold;
      font-size: 18px;
      color: #5347D8;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .btn-custom i {
      margin-left: 10px;
    }
    .navbar-brand {
      color: #fff !important;
    }
    .navbar-nav .nav-link {
      color: #fff !important;
      margin: 0 15px;
      font-weight: bold;
    }
    .poppins-text-bold {
      font-family: 'Poppins', sans-serif;
      font-weight: bold;
      color: white;
    }
    .btn {
      background-color: white;
      border-radius: 0;
    }
    .gap-horizontal {
      display: flex;
      flex-direction: row;
      gap: 20px;
    }
  </style>
</head>
<body>

<header class="header">
  <h4>MUSEUM BRAWIJAYA MALANG</h4>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url()?>">BERANDA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url()?>/koleksi">KOLEKSI PERMANEN</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url()?>/dashboard/katalog">KATALOG BUKU PERPUSTAKAAN</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <a href="surat" class="btn">Surat Observasi/Kunjungan</a>
</header>

<div style="margin-top: 5%;padding: 20px;">
  <div class="row">
    <div class="col-md-6">
      <h2 class="poppins-text-bold">Selamat Datang di Inventory Museum Brawijaya Malang</h2>
      <br>
      <p style="margin-bottom: 3%;" class="poppins-text-bold">Selamat menikmati perjalanan sejarah di Museum Brawijaya Malang melalui situs web kami. Temukan kekayaan budaya Indonesia dan hargai dedikasi para pahlawan kita yang telah berjuang untuk kemerdekaan dan kedamaian</p>
      <div class="row">
        <div class="col-md-12 gap-horizontal">
          <a href="#" class="btn-custom" style="color: black;text-decoration:none">Temukan Koleksi</a> 
          <a href="#" style="margin-top: 3%;"><img src="panah.png" alt="Logo 1" class="img-fluid" style="max-height: 50%;"></a>
        </div>
      </div>
       
    </div>
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <img src="image1.png" alt="Logo 1" class="img-fluid">
        </div>
        <div class="col-md-6">
          <img src="image2.png" alt="Logo 2" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
