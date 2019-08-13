<?php
session_start();
include("controllers/DetildonasiController.php");
include("models/DonasiModel.php");
include("etc/Koneksi.php");
$_SESSION['id_donasi'] = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Donasikan</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="donasikanlogo.png" rel="icon">
  <link href="donasikanlogo.png" rel="donasikanlogo">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/portfolio-item.css" rel="stylesheet">
  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap-social.css" rel="stylesheet">

  <style>
  .h1 {
    color: #223d5c;
  }

  .my-4 {
    margin-top: 5rem !important;
  }

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

  }

  .card z {
    border: none;
  }

  h6 {
    margin-bottom: 0px;
  }

  .btn-primary,
  .btn-primary:hover,
  .btn-primary:active,
  .btn-primary:visited {
    background-color: #223d5c !important;
  }
  </style>

</head>

<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index.php">
          <img src="img/logo-2.png" alt="" style="width:40px;color:" />
        </a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="index.php#about">Tentang Kami</a>
          </li>
          <li>
            <a href="menu.php">Donasi</a>
          </li>
          <li>
            <a href="index.php#contact">Kontak</a>
          </li>
          <li>
            <a href="galangdana.html">Mulai Galang Dana</a>
          </li>
          <?php
          if (isset($_SESSION['login'])) {
            ?>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Lihat Profil</a>
                </li>
                <li>
                  <a href="profil.php">Pengaturan</a>
                </li>
                <div class="dropdown-divider"></div>
                <li>
                  <a href="controllers/LogOutController.php">Keluar</a>
                </li>
              </ul>
            </li>
            <?php
          } ?>
        </ul>
      </nav>
    </div>
  </header>

  <div class="container">

    <!-- Portfolio Item Heading -->
    <?php
    $detil = new DetildonasiController();
    $rows = $detil->getDataDonasi($_GET['id']);
    $row = $rows[0];
    ?>
    <h1 class="my-4 pt-4"><?php echo $row['judul']; ?>
    </h1>
    <?php $_SESSION['judul_donasi'] = $row['judul']; ?>

    <!-- Portfolio Item Row -->
    <div class="row">

      <div class="col-md-8">
        <img class="img-fluid" src="bukti/<?php echo $row['foto']; ?>" alt="">
      </div>

      <div class="col-md-4">
        <div class="card" style="border:none">
          <div class="card" style="border:none; padding-bottom:15px;"><?php echo $row['deskripsi_donasi']; ?>
            <br>
          </div>
          <div class="card" style="border:none">
            <div class="media">
              <img style="width:15%;border-radius:50%" class="mr-3" src="https://api.adorable.io/avatars/285/abott@adorable.png" alt="Generic placeholder image">
              <div class="media-body">
                <h5 class="mt-0" style="margin-bottom:0">Penggalang Dana</h5>
                <a href="profil.html"><?php echo $row['nama']; ?></a>
              </div>
            </div>
          </div>
          <div style="padding-top: 20px;">
            <h3>Target Donasi</h3>
          </div>
          <div style="padding-bottom:15px;"><?php echo $row['donasi_terkumpul']; ?> terkumpul dari target <?php echo $row['target']; ?></div>
          <div class="penanda">
            <div class="penanda-2" style="width:25%; "></div>
          </div>
        </div>
        <div style="width:100%">
          <div class="card-persen">Waktu tersisa
            <?php
            echo $detil->sisaWaktu($row['tgl_donasi'],$row['tgl_expired']); ?>
            hari lagi
          </div>
          <div>
            <a class="btn-primary btn-lg btn-block" href="donasikan.php" style="text-align: center">Donasi Sekarang</a>
          </div>

        </div>

      </div>


    </div>

    <!-- /.row -->

    <!-- Related Projects Row -->
    <h3 class="my-4">Donasi Lainnya</h3>

    <div class="row">

      <?php
      $rows = $detil->donasiLainnya();
      $print = 0;
      foreach ($rows as $row) {

        ?>

        <div class="col-md-3 col-sm-6 mb-4">
          <div class="card h-100">
            <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>">
              <img class="card-img-top" src="bukti/<?php echo $row['foto']; ?>" alt="" style="display: block;max-width: 100%; max-height:150px">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="#" style="color: #223d5c"><?php echo $row['judul']; ?></a>
                <br>
                <a style="font-size:14px;">Donasi oleh
                  <a href="" style="color:lightskyblue;font-size:14px"><?php echo $row['nama']; ?></a>
                </a>

              </h4>
              <p>Terkumpul <?php echo $row['donasi_terkumpul']; ?> dari target <?php echo $row['target']; ?></p>
            </div>
            <div class="card-footer">
              <div class="penanda">
                <div class="penanda-2" style="width:25%"></div>
              </div>
              <div style="width:100%">
                <div class="card-persen">Waktu tersisa
                  <?php
                  echo $detil->sisaWaktu($row['tgl_expired']);
                  ?>
                  hari lagi
                </div>
              </div>
            </div>

          </div>
        </div>
        <?php
        $print++;
        if ($print ==4) {
          break;
        }}?>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->


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
                <li>
                  <i class="ion-ios-arrow-right"></i>
                  <a href="#">Home</a>
                </li>
                <li>
                  <i class="ion-ios-arrow-right"></i>
                  <a href="#">Tentang Kami</a>
                </li>
                <li>
                  <i class="ion-ios-arrow-right"></i>
                  <a href="#">Mulai Donasi</a>
                </li>
                <li>
                  <i class="ion-ios-arrow-right"></i>
                  <a href="#">Kontak</a>
                </li>
              </ul>
            </div>

            <div class="col-lg-3 col-md-6 footer-contact">
              <h4>Kontak</h4>
              <p>
                Fakultas Ilmu Komputer
                <br> Universitas Brawijaya
                <br> Jalan Veteran no. 8, Malang, Jawa Timur
                <br>
                <strong>Telepon:</strong> +621234567890
                <br>
                <strong>Email:</strong> donasikan@ub.ac.id
                <br>
              </p>

              <div class="social-links">
                <a href="#" class="twitter">
                  <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="facebook">
                  <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="instagram">
                  <i class="fa fa-instagram"></i>
                </a>
                <a href="#" class="google-plus">
                  <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="linkedin">
                  <i class="fa fa-linkedin"></i>
                </a>
              </div>

            </div>

            <div class="col-lg-3 col-md-6 footer-newsletter">
              <h4>Newsletter</h4>
              <p>Berlangganan untuk mendapatkan notifikasi mengenai program menarik kami</p>
              <form action="" method="post">
                <input type="email" name="email">
                <input type="submit" value="Subscribe">
              </form>
            </div>

          </div>
        </div>
      </div>

      <div class="container">
        <div class="copyright">
          &copy; Copyright
          <strong>Kelompok 5</strong>
        </div>

      </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top">
      <i class="fa fa-chevron-up"></i>
    </a>

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
