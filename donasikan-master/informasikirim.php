<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Donasi | Donasikan</title>
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/3-col-portfolio.css" rel="stylesheet">
  <meta charset="utf-8">
  <title>Informasi</title>
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
  .my-4 {
    margin-top: 5rem !important;
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

  .card-persen {
    position: inline-block;
    font-size: 14px;
    text-align: right;
    padding-top: 10px;
    padding-bottom: 20px;
  }

  .btn-primary{
    background-color: #223d5c;
  }

  </style>
  <script>
  function handleChange(input) {
    if (input.value < 0) input.value = 0;
    if (input.value > 100) input.value = 100;
  }
  </script>
</head>

<body>
  <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index setelah log in.php"><img src="img/logo-2.png" alt="" style="width:50px"/></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">Tentang Kami</a></li>
          <li><a href="menu.php">Donasi</a></li>
          <li><a href="index.php#contact">Kontak</a></li>
          <?php
          if (isset($_SESSION['login'])) {
            ?>
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
            <?php
          }else{
            ?>
            <li>
              <a href="login.html">Masuk</a>
            </li>
          <?php  }?>
        </ul>
      </nav>
    </div>
  </header>

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4"><center>Kirim KE</center>
    </h1>
    <center>
      <h3>BRI : 034 101 000 743 303</h3>
      <h3>BCA : 731 025 2527</h3>
      <h3>BNI : 023 827 2088</h3>
      <h3>MANDIRI : 0700 000 899 992</h3>
    </center>

    <a href="menu.php" class="pull-right">Back</a>
  </div>



  <br><br>
</div>
</div>

</div>
<!-- /.container -->

<!-- Footer -->
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
      <strong>Kelompok 5</strong>.
    </div>

  </div>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
