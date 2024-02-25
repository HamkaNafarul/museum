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
            min-width: 450px;
            height: 70px;
            font-weight: bold;
            font-size: 18px;
            color: white;
            background-color: #5347D8;
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
         .gap-horizontal {
            display: flex;
            flex-direction: row;
            gap: 20px;
         }
      </style>
   </head>
   <body>
      <div class="row">
         <div class="col-lg-5" style="background-color: #5347D8;padding: 30px;">
            <a href="surat.html" class="btn" style="background-color: white;border-radius: 0;margin-bottom: 20%;">
            Surat Observasi/Kunjungan
            </a>
            <h1 class="poppins-text-bold" style="font-weight: 600;">
               Isikan Formulir Berikut<br> Jika Ingin Melakukan Kunjungan atau<br> Observasi
            </h1>
            <p style="color: white;">Kontak</p>
            <div class="row">
               <div class="col-sm-1">
                  <img src="building.png">
               </div>
               <div class="col-sm-6">
                  <small style="color: white;">Jl. Idjen Gading Asri<br>Kota Malang</small>
               </div>
            </div>
            <div class="row" style="padding-bottom: 2%;">
               <div class="col-sm-1">
                  <img src="telephone.png">
               </div>
               <div class="col-sm-6">
                  <small style="color: white;">62-6545-2041</small>
               </div>
            </div>
            <div class="row">
               <div class="col-sm-1">
                  <img src="mail.png">
               </div>
               <div class="col-sm-6">
                  <small style="color: white;">museumbrawijaya@gmail.com</small>
               </div>
            </div>
            <br>
            <p style="color: white;">Social Media</p>
            <div class="row">
               <div class="col-sm-1">
                  <img src="facebook.png">
               </div>
               <div class="col-sm-1">
                  <img src="twitter.png">
               </div>
               <div class="col-sm-1">
                  <img src="instagram.png">
               </div>
               <div class="col-sm-1">
                  <small style="color: white;">MuseumBrawijaya</small>
               </div>
            </div>
            <div style="min-width: 520px;height: 340px;background-color: white;margin-top: 2%;">
               <div style="padding: 20px;">
                  <p>Perhatikan untuk tanggal kunjungan/observasi yang sudah penuh</p>
               </div>
               <div style="width: 408px;height: 214px;background-color: #C4C4C4;margin-left: 10%;">
                  <div style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                     <h4>MM-DD-YYYY</h4> 
                     <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                     <b>Penuh</b>
                     </button>
                  </div>
                  <div style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                     <h4>MM-DD-YYYY</h4> 
                     <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                     <b>Penuh</b>
                     </button>
                  </div>
                  <div style="display: flex;flex-direction: row;gap: 50px;padding: 20px;border-bottom: 1px solid black;padding-bottom: 2px;">
                     <h4>MM-DD-YYYY</h4> 
                     <button class="btn btn-danger" style="height: 30px;width: 150px;padding: 2px;border-radius: 0;">
                     <b>Penuh</b>
                     </button>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-lg-7" style="padding: 30px;">
            <h1 class="poppins-text-bold" style="color: #5347D8;text-align: center;margin-top: 7%;margin-bottom: 7%;">
               Isi Form Berikut
            </h1>
            <div style=" display: flex;flex-direction: column;gap: 20px;margin-left: 20%;margin-right: 20%;">
               <input type="text" class="form-control" name="" placeholder="Nama" style="background-color: #C4C4C4;min-height: 78px;">
               <input type="text" class="form-control" name="" placeholder="Nomor HP" style="background-color: #C4C4C4;min-height: 78px;">
               <input type="text" class="form-control" name="" placeholder="Asal Instansi" style="background-color: #C4C4C4;min-height: 78px;">
               <input type="datetime-local" class="form-control" name="" style="background-color: #C4C4C4;min-height: 78px">
               <input type="text" class="form-control" name="" placeholder="Agenda" style="background-color: #C4C4C4;min-height: 78px;">  
               <input type="file" class="form-control" name="" style="background-color: #C4C4C4;min-height: 78px;padding: 30px;"> 
               <div class="col-md-12" style="padding-top: 10%;">
                  <button class="btn-custom">KIRIM</button>
               </div>
            </div>
         </div>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
   </body>
</html>
