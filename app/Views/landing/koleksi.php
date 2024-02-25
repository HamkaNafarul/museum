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
  <!-- Include navbar from external file -->
  <iframe src="navbar.html" style="border: none; height: 50px; width: 100%;"></iframe>
</header>
<div class="col-md-12" align="center">
  <h1 style="color: white;"><b>KOLEKSI PAMERAN</b></h1>
</div>
<div align="center" class="col-lg-12" style="padding-left:20px;padding-right: 20px;min-height: 471px;">
  <div class="col-md-8">
    <div class="input-group mb-3">
     <select class="form-control" style="border-radius: 0;">
        <option disabled selected>Katgeori</option>
        <option>Kategori 1</option>
        <option>Kategori 2</option>
      </select>
      <input type="text" class="form-control" placeholder="Tahun" style="border-radius: 0;">
      <input type="text" class="form-control" placeholder="Cari Berdasarkan No Koleksi"  style="border-radius: 0;">
      <div class="input-group-append">
        <button class="btn" style="background-color: #6A7A74;">Cari</button>
      </div>
    </div>
  </div>
  <div class="col-md-12 row">
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card" style="width: 314px;">
        <a href="pameran" style="text-decoration: none; color: black;">
        <img style="min-height: 247px;" class="card-img-top" src="pameran.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title" align="right"><b>Koleksi 1</b></h5>
          <p align="left" class="card-text">Tahun</p>
          <textarea class="form-control" rows="4" style="background-color: #B6AFAF;" placeholder="Deskripsi Barang" readonly></textarea>
        </div>
      </a>
      </div>
    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
