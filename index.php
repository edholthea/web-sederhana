<?php
include "inc/header.php";
include "inc/navbar.php";
?>
<body>

    <!-- Hero Section with Carousel -->
    <div id="heroCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#heroCarousel" data-slide-to="1"></li>
            <li data-target="#heroCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/slide3.png" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Solusi Pertanian Cerdas dengan IoT</h1>
                    <p>Memperkenalkan teknologi pertanian cerdas untuk meningkatkan hasil panen dan efisiensi.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide1.png" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Monitoring Tanaman Secara Real-Time</h1>
                    <p>Pantau kondisi tanaman Anda setiap saat dengan teknologi canggih.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide2.png" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h1>Pengendalian Iklim Otomatis</h1>
                    <p>Mengatur iklim rumah kaca Anda dengan mudah dan efisien.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Features Section -->
    <section id="features" class="features">
        <div class="container">
            <div class="row">
              	<div class="col-lg-3 col-12">
                    <center><img src="../assets/img/kebunlogo.png" class="" alt="kebun data"></center>
                  <center><h6>Kebun Data | Integrasi Teknologi dan Pertanian </h6></center>
                </div>
                <div class="col-lg-3 col-12">
                    <br><br><h3><b>Monitoring Tanaman</b></h3>
                    <p>Memantau kondisi tanaman secara real-time dengan sensor IoT.</p>
                </div>
                <div class="col-lg-3 col-12">
                  <br><br><h3><b>Pengendalian Iklim</b></h3>
                    <p>Menyesuaikan kondisi iklim di dalam rumah kaca secara otomatis.</p>
                </div>
                <div class="col-lg-3 col-12">
                  <br><br><h3><b>Pengelolaan Air</b></h3>
                    <p>Mengoptimalkan penggunaan air untuk irigasi dengan teknologi canggih.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
   <section id="products" class="products">
        <center><h2 class="mb-2 mt-4">Produk</h2></center>
        <div class="row">
          <div class="col">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>Instalasi Irigasi</h3>

                <p>Drip Irigasi | Smart Farming</p>
              </div>
              <div class="icon">
                <i class="fas fa-faucet"></i>
              </div>
              <a href="blog/artikel.php" target="_blank" class="small-box-footer">
                Lihat Produk <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>Alat Monitoring</h3>

                <p>IoT Smart Farming</p>
              </div>
              <div class="icon">
                <i class="fas fa-satellite-dish"></i>
              </div>
              <a href="#" class="small-box-footer">
                Lihat Produk <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>Pelatihan</h3>

                <p>Pelatihan IoT Smart Farming</p>
              </div>
              <div class="icon">
                <i class="fas fa-users"></i>
              </div>
              <a href="#" class="small-box-footer">
                Lihat Produk <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
        </div>
    </section>

        <br>
        <br>
        <br>

    <!-- Gallery Section -->
    <section id="gallery" class="gallery">
          <br><br><center><h2>Galeri</h2></center>
          <div class="col-12">
            <div class="card card-secondary">
              <div class="card-header">
                <h4 class="card-title"></h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="../assets/img/image1.png" data-toggle="lightbox" data-title="Pelatihan Smart Farming - BPP Kalijati" data-gallery="gallery">
                      <img src="../assets/img/image1.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image2.png" data-toggle="lightbox" data-title="Training Of Trainer Smart Farming - Program YeSS 2023" data-gallery="gallery">
                      <img src="../assets/img/image2.png" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image3.png" data-toggle="lightbox" data-title="Pemateri di SMK Negeri Compreng" data-gallery="gallery">
                      <img src="../assets/img/image3.png" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image4.png" data-toggle="lightbox" data-title="Pemateri di SMK Negeri Compreng" data-gallery="gallery">
                      <img src="../assets/img/image4.png" class="img-fluid mb-2" alt="red sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image5.png" data-toggle="lightbox" data-title="Mengenalkan Alat IoT Smart Farming kepada Wakil Bupati Subang" data-gallery="gallery">
                      <img src="../assets/img/image5.png" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image6.png" data-toggle="lightbox" data-title="Lomba Teknologi Tepat Guna (TTG) BRIN 2023" data-gallery="gallery">
                      <img src="../assets/img/image6.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image7.png" data-toggle="lightbox" data-title="Project IoT Smart Farming Versi 1" data-gallery="gallery">
                      <img src="../assets/img/image7.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image8.png" data-toggle="lightbox" data-title="Pengenalan IoT Smart Farming - SMKN Cikaum" data-gallery="gallery">
                      <img src="../assets/img/image8.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image9.png" data-toggle="lightbox" data-title="Pengenalan IoT Smart Farming - SMKN Cikaum" data-gallery="gallery">
                      <img src="../assets/img/image9.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image10.png" data-toggle="lightbox" data-title="Praktek Instalasi Irigasi Tetes" data-gallery="gallery">
                      <img src="../assets/img/image10.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/image11.png" data-toggle="lightbox" data-title="Narasumber Pelatihan YeSS 2022 - BPP Kalijati" data-gallery="gallery">
                      <img src="../assets/img/image11.png" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="../assets/img/produk2.png" data-toggle="lightbox" data-title="Juara 1 Lomba Inovasi Teknologi PPL Kab. Subang" data-gallery="gallery">
                      <img src="../assets/img/produk2.png" class="img-fluid mb-2" alt="black sample"/>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

	<!-- Client Section -->
<br> <br> <br>
<section id="client" class="client">
<div class="container mt-5">
        <h2 class="text-center mb-5">Customer</h2>
        <div class="row">
          <div class="col-md-3 col-sm-6 mb-4">
           <a target="_blank" href="../assets/img/smkn compreng.png">
              <img src="../assets/img/smkn compreng.png" alt="Forest" style="width:100px">
            </a>
          </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <a target="_blank" href="../assets/img/wm.png">
              <img src="../assets/img/wm.png" alt="Forest" style="width:100px">
            </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <a target="_blank" href="../assets/img/natarasa tani.png">
              <img src="../assets/img/natarasa tani.png" alt="Forest" style="width:100px">
            </a>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <a target="_blank" href="../assets/img/agrospora.png">
              <img src="../assets/img/agrospora.png" alt="Forest" style="width:100px">
            </a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <br> <br> <br> <br> <br> 
    <hr style="height:2px;border-width:0;color:black;background-color:black">
</section>
    <?php
    include "inc/contact.php";
    include "inc/footer.php";
    ?>

    <!-- JavaScript Libraries -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- Bootstrap -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Ekko Lightbox -->
<script src="../plugins/ekko-lightbox/ekko-lightbox.min.js"></script>
<!-- Filterizr-->
<script src="../plugins/filterizr/jquery.filterizr.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $(document).on('click', '[data-toggle="lightbox"]', function(event) {
      event.preventDefault();
      $(this).ekkoLightbox({
        alwaysShowClose: true
      });
    });

    $('.filter-container').filterizr({gutterPixels: 3});
    $('.btn[data-filter]').on('click', function() {
      $('.btn[data-filter]').removeClass('active');
      $(this).addClass('active');
    });
  })
</script>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/667e314f9d7f358570d43602/1i1ef181b';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

</body>
</html>

<style>
img client {
  border: 1px solid #fff;
  border-radius: 4px;
  padding: 5px;
  justify-content: center;
  width: 150px;
}

img client:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
  

</style>
