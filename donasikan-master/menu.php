<?php
session_start();
include("controllers/MenuController.php");
include("models/DonasiModel.php");
include("etc/Koneksi.php");
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
  <title>Donasikan</title>
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
  </style>
</head>

<body>
  <header id="header" >
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <a href="index.php"><img src="img/logo-2.png" alt="" style="width:40px;color:"/></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li >
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="index.php#about">Tentang Kami</a>
          </li>
          <li class="menu-active">
            <a href="#">Donasi</a>
          </li>
          <li>
            <a href="index.php#contact">Kontak</a>
          </li>
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
    <h1 class="my-4">Mulai Berdonasi
    </h1>

    <div class="row">

      <?php
      $menu = new MenuController();
      $rows = $menu->tampilListDonasi();
      foreach ($rows as $row) {
        ?>
        <div class="col-lg-4 col-sm-6 portfolio-item">
          <div class="card h-100">
            <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>">
              <img class="card-img-top" src="bukti/<?php echo $row['foto']; ?>" alt="" style="display: block;max-width: 100%; max-height:150px">
            </a>
            <div class="card-body">
              <h4 class="card-title">
                <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>" style="color: #223d5c"><?php echo $row['judul']; ?></a>
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
                    echo $menu->sisaWaktu($row['tgl_expired']);
                   ?>
                  hari lagi
                </div>
              </div>
            </div>

          </div>
        </div>
      <?php } ?>

    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <!-- <ul class="pagination justify-content-center">
    <li class="page-item">
    <a class="page-link" href="#" aria-label="Previous">
    <span aria-hidden="true">&laquo;</span>
    <span class="sr-only">Previous</span>
  </a>
</li>
<li class="page-item">
<a class="page-link" href="#">1</a>
</li>
<li class="page-item">
<a class="page-link" href="#">2</a>
</li>
<li class="page-item">
<a class="page-link" href="#">3</a>
</li>
<li class="page-item">
<a class="page-link" href="#" aria-label="Next">
<span aria-hidden="true">&raquo;</span>
<span class="sr-only">Next</span>
</a>
</li>
</ul> -->

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
