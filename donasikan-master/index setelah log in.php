<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Donasikan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="donasikanlogo.png" rel="icon">
  <link href="donasikanlogo.png" rel="donasikanlogo">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>
          .card-persen {
            position: inline-block;
            font-size: 14px;
            text-align: right;
            padding-top: 10px;
            padding-bottom: 20px;
        }

        .card-body {
            position: relative;
            padding: 15px;
            word-wrap: break-word;
        }

        .card-footer {
            border-bottom-right-radius: 3px;
            border-bottom-left-radius: 3px;
            width: 100%;
            padding: 0 16px;
            background-color: white;
            border-top: none;
        }

        .penanda {
            position: relative;
            height: 3px;
            width: 100%;
            background: lightgray;
            border-radius: 2px;
        }

        .penanda-2 {
            position: absolute;
            top: 0;
            left: 0;
            height: 80%;
            background: #223d5c;
            border-radius: 2px;

        }</style>
</head>

<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index setelah log in.php"><img src="img/logo-2.png" alt="" style="width:50px"/></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="#about">Tentang Kami</a></li>
          <li><a href="#call-to-action">Donasi</a></li>
          <li><a href="#contact">Kontak</a></li>
          <li><a href="galangdana.php">Mulai Galang Dana</a></li>
          <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?>
                  <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                  <li>
                      <a href="userprofile.php">Lihat Profil</a>
                  </li>
                  <li>
                      <a href="userprofile.php">Pengaturan</a>
                  </li>
                  <div class="dropdown-divider"></div>
                  <li>
                      <a href="controllers/LogOutController.php">Keluar</a>
                  </li>
              </ul>
          </li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="intro">
    <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('img/donasi1.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Donasikan</h2>
                <p>How we live is what makes us real</p>
                <a href="menu.php" class="btn-get-started scrollto">Mulai Berdonasi</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url('img/donasi2.png');">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2>Donasikan</h2>
                <p>Satu langkah kecil dari Anda sangat berarti untuk mereka</p>
                <a href="menu.php" class="btn-get-started scrollto">Mulai Berdonasi</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section>

  <main id="main">
    <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>Tentang Kami</h3>
          <p>donasikan merupakan platform yang memudahkan dalam berdonasi.</p>
        </header>


      </div>
    </section>
    <section id="call-to-action" class="wow fadeIn">
      <div class="container text-center">
        <h3>Yuk Berdonasi</h3>
        <p>Satu langkah kecil dari Anda sangat berarti bagi mereka</p>
        <a class="cta-btn" href="menu.php">Mulai Donasi</a>
      </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
      <div class="container">

        <div class="section-header">
          <h3>Kontak</h3>
        </div>

        <div class="row contact-info">

          <div class="col-md-6">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>Alamat</h3>
              <address>Fakultas Ilmu Komputer, Universitas Brawijaya</address>
            </div>
          </div>

          <div class="col-md-6">
            <div class="contact-phone">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.437184721972!2d112.6124845147792!3d-7.953691594271177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78827928958613%3A0xd600c9c3727a93aa!2sFakultas+Ilmu+Komputer+Universitas+Brawijaya+(FILKOM)!5e0!3m2!1sen!2sid!4v1525524396218" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

            </div>
          </div>

        </div>

      </div>
    </section>

  </main>

  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Donasikan</h3>
            <p>Platform berdonasi nomor 1 di Indonesia</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Halaman</h4>
            <ul>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Home</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Mulai Donasi</a></li>
              <li><i class="ion-ios-arrow-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Kontak</h4>
            <p>
              Fakultas Ilmu Komputer <br>
              Universitas Brawijaya<br>
              Jalan Veteran no. 8, Malang, Jawa Timur<br>
              <strong>Telepon:</strong> +621234567890<br>
              <strong>Email:</strong> donasikan@ub.ac.id<br>
            </p>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Newsletter</h4>
            <p>Berlangganan untuk mendapatkan notifikasi mengenai program menarik kami</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit"  value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Kelompok 5</strong>.
      </div>

    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
