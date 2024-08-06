<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="icon" type="image/x-icon" href="../assets/img/kebunlogo_kecil.png">
    <title>Kebun Data | Integrasi Teknologi dan Pertanian</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .features, .products, .team, .gallery, .contact-form {
            padding: 50px 0;
        }
        .feature-item, .product-item, .team-member {
            padding: 20px;
        }
        footer {
            background: #02abc2;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>

<!-- Navbar -->
    <nav class="navbar navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="../../index.php">Kebun Data</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="../../index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#features">Fitur</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#products">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#gallery">Galeri</a></li>
              	<li class="nav-item"><a class="nav-link" href="../../index.php#client">Customer</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#contact">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php">Artikel</a></li>
              	<li class="nav-item"><a class="nav-link" href="../perpus/index.php">Perpustakaan</a></li>
            </ul>
        </div>
    </nav>

<body>
    <div class="container mt-5">
        <br><br><h1 class="text-center">Projek Instalasi Drip Irigasi</h1>
        <br> </br>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <p>Projek instalasi drip irigasi di kebun alpukat seluas 4.000 m2 di daerah Cikaum, Subang. Dimulai pada pertengahan bulan maret.</p>
                <p>Diawali dengan survey ke lokasi kebun, kemudian dibuatkan layout untuk pipanisasi saluran irigasi. Total populasi pohon alpukat kurang lebih ada 110 pohon, dengan adanya drip irigasi bisa membantu petani untuk memaksimalkan penyiraman khususnya ketika musim kemarau tiba. selain untu efisiensi waktu penyiraman juga untuk menghemat air karena penyiraman dilakukan sesuai dengan kebutuhan.</p>
                <div class="text-center my-12">
                    <img src="../assets/img/Layout.jpg" class="img-fluid" alt="Example Image">
                </div>
                <div class="row">
                  <div class="column">
                    <img src="../assets/img/kebun4.jpg" alt="Snow" style="width:100%">
                  </div>
                  <div class="column">
                    <img src="../assets/img/kebun2.jpg" alt="Forest" style="width:100%">
                  </div>
                  <div class="column">
                    <img src="../assets/img/kebun3.jpg" alt="Mountains" style="width:100%">
                  </div>
                  </div>
                </div>
                <center><p>Doumentasi instalasi drip irigasi di kebun alpukat daerah Cikaum, Kabupaten Subang, Jawa Barat</p></center>
                <div class="text-center my-4">
                    <video width="30%" controls>
                        <source src="../video/Irigasi.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </div>

<br> </br>
<br> </br>
<br> </br>


<?php
include "../inc/footer.php";
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
* {
  box-sizing: border-box;
}

.row {
  display: flex;
}

/* Create three equal columns that sits next to each other */
.column {
  flex: 25%;
  padding: 5px;
}
</style>