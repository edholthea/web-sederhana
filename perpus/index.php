
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../assets/img/kebunlogo_kecil.png">
    <title>Kebun Data | Integrasi Teknologi dan Pertanian</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<!-- Navbar -->
    <nav class="navbar navbar fixed-top navbar-expand-lg navbar-dark bg-primary">
        <a class="navbar-brand" href="kebundata.my.id">Kebun Data</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link" href="../../index.php">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#features">Fitur</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#products">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#gallery">Galeri</a></li>
                <li class="nav-item"><a class="nav-link" href="../../index.php#contact">Kontak</a></li>
                <li class="nav-item"><a class="nav-link" href="../blog/index.php">Artikel</a></li>
                <li class="nav-item"><a class="nav-link" href="../perpus/index.php">Perpustakaan</a></li>
            </ul>
        </div>
    </nav>
<br><br><br><center><b><h1>PERPUSTAKAAN DIGITAL</h1></b></center></center>
<body style="width: 800px; margin: auto; padding: 10px;">
    <h2 style="text-align: center;">Download Ebook (PDF)</h2>
    <br><br>
<div class="container">
    
<div class="card-body">
    <table table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th style = "text-align: center;">No</th>
                <th style = "text-align: center;">Kode</th>
                <th style = "text-align: center;">Nama</th>
                <th style = "text-align: center;">Type</th>
                <th style = "text-align: center;">Aksi</th>
            </tr>
        </thead>
        <tbody style="text-align: center;">
            <?php
                include 'Koneksi.php';
                $nomor_urut = 0;
                $result = selectAllData();
                $countData = mysqli_num_rows($result);

                if ($countData < 1) { 
            ?>    
                    <tr>
                        <td colspan="5" style="text-align: center; font-weight: bold; font-size: 12px; padding: 5px; color: red">TIDAK ADA DATA</td>
                    </tr>

            <?php
                } else {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $nomor_urut = $nomor_urut + 1;
            ?>
                        <tr>
                            <td><?php echo $nomor_urut; ?></td>
                            <td><?php echo $row['kode_buku']; ?></td>
                            <td><?php echo $row['nama_buku']; ?></td>
                            <td><?php echo strtoupper($row['ekstensi']) ?></td>
                            <td><a href="DownloadFile.php?url=<?php echo $row['berkas']; ?>">Download</a></td>
                        </tr>
            <?php 
                    }
                } 
            ?>
        </tbody>
    </table>
</div>
</body>
  <br><br><hr>
  <b><h6><center>© 2024 Kebun Data | Integrasi Teknologi dan Pertanian</center></h6></b>
</html>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plugins/jszip/jszip.min.js"></script>
<script src="../../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>