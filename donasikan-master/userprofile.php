<?php
session_start();
include("models/DonasiModel.php");
include("etc/Koneksi.php");
include("controllers/SettingController.php");
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

  .btn-primary {
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
            <a href="galangdana.php">Mulai Galang Dana</a>
          </li>
          <li class="dropdown menu-active">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $_SESSION['username']; ?>
              <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
              <li>
                <a href="userprofile.php">Lihat Profil</a>
              </li>
              <li>
                <a href="userprofile.php#v-pills-settings">Pengaturan</a>
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

  <!-- Page Content -->
  <div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">
      <center></center>
    </h1>
    <div class="row">
      <?php
        $setting = new SettingController();
        $rows = $setting->tampilDataUser($_SESSION['email']);
        $row = $rows[0];
       ?>
      <div class="col-md-4">
        <div class="card" style="width: 18rem;">
          <img class="card-img-top" src="foto/<?php echo $row['foto']; ?>" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">My Profil</h5>
            <p class="card-text"><?php echo $_SESSION['username']; ?></p>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home"
              aria-selected="true">Galang Dana</a>
              <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages"
              aria-selected="false">Info</a>
              <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings"
              aria-selected="false">Settings</a>
            </div>

          </div>

        </div>
      </div>
      <dic class="col-md-8">
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

            <h2>Donasi oleh <?php echo $_SESSION['username']; ?></h2>
            <h2>ACC</h2>
            <div class="row">

              <?php
                $setting = new SettingController();
                $rows = $setting->tampilDonasiSudahAcc($_SESSION['email']);
                foreach ($rows as $row) {

               ?>
              <div class="col-md-4 wow fadeInUp">
                <div class="card h-100">
                  <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>">
                    <img class="card-img-top" src="bukti/<?php echo $row['foto']; ?>" alt="" style="display: block;max-width: 100%; max-height:150px">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>" style="color: #223d5c; font-size:20px"><?php echo $row['judul']; ?></a>
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
                        <?php echo $setting->sisaWaktu($row['tgl_expired']); ?>
                        hari lagi
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            </div>
            <hr>
            <h2>Belum ACC</h2>
            <div class="row">

              <?php
                $setting = new SettingController();
                $rows = $setting->tampilDonasiBelumAcc($_SESSION['email']);
                foreach ($rows as $row) {

               ?>
              <div class="col-md-4 wow fadeInUp">
                <div class="card h-100">
                  <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>">
                    <img class="card-img-top" src="bukti/<?php echo $row['foto']; ?>" alt="" style="display: block;max-width: 100%; max-height:150px">
                  </a>
                  <div class="card-body">
                    <h4 class="card-title">
                      <a href="detildonasi.php?id=<?php echo $row['id_donasi']; ?>" style="color: #223d5c; font-size:20px"><?php echo $row['judul']; ?></a>
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
                        <?php echo $setting->sisaWaktu($row['tgl_expired']); ?>
                        hari lagi
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>

            </div>

          </div>

          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
            <?php
            $rows = $setting->tampilDataUser($_SESSION['email']);
            $row = $rows[0];
            ?>

            <center>
              <h3>Informasi</h3>
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" disabled value="<?php echo $row['nama']; ?>">
              </div>
              <div class="form-group">
                <label for="nama">Email</label>
                <input type="text" class="form-control" name="email" id="email" disabled value="<?php echo $row['email']; ?>">
              </div>
              <div class="form-group">
                <label for="logo_acara">Kontak</label>
                <input type="text" class="form-control" name="kontak" id="kontak" disabled value="<?php echo $row['no_hp']; ?>">
              </div>
              <div class="form-group">
                <label for="deskripsi">Nomor Rekening</label>
                <input type="text"class="form-control" name="nomorrek" id="nomorrek" disabled value="<?php echo $row['no_rekening']; ?>">
              </div>
              <div class="form-group">
                <label for="tgl_selesai">Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" disabled value=""><?php echo $row['alamat']; ?></textarea>
              </div>
            </center>

          </div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">

            <center>

              <h3>Edit Foto Profil</h3>
              <form action="controllers/UserProfileController.php?updateFoto=1" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="foto">Rubah Foto</label>
                  <input type="file" class="form-control" name="foto" id="foto">
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-buat" value="Simpan" name="submit">
              </form>

              <br>
              <hr>
              <h3>Edit Profil</h3>
              <form action="controllers/UserProfileController.php?updateProfil=1" method="post">
                <div class="form-group">
                  <label for="nama">Nama</label>
                  <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row['nama']; ?>">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" name="email" id="email" value="<?php echo $row['email']; ?>">
                </div>
                <div class="form-group">
                  <label for="kontak">Kontak</label>
                  <input type="text" class="form-control" name="kontak" id="kontak" value="<?php echo $row['no_hp']; ?>">
                </div>
                <div class="form-group">
                  <label for="nomorrek">Nomor Rekening</label>
                  <input type="text"class="form-control" name="nomorrek" id="nomorrek" value="<?php echo $row['no_rekening']; ?>">
                </div>
                <div class="form-group">
                  <label for="alamat">Alamat</label>
                  <textarea class="form-control" name="alamat" id="alamat" ><?php echo $row['alamat']; ?></textarea>
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-buat" value="Simpan" name="submit">
              </form>

              <br>
              <hr>
              <h3>Ganti Password</h3>
              <form action="controllers/UserProfileController.php?gantiPass=1" method="post">
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="form-group">
                  <label for="passwordbaru">Password Baru</label>
                  <input type="password" class="form-control" name="passwordbaru" id="passwordbaru" >
                </div>
                <div class="form-group">
                  <label for="passworulang">Ketik Ulang Password</label>
                  <input type="password" class="form-control" name="passwordulang" id="passwordulang" onchange="cekPassword()">
                </div>
                <input type="submit" class="btn btn-primary btn-lg btn-buat" value="Simpan" name="submit">
              </form>


            </center>
          </div>
        </div>
      </dic>
    </div>



    <br>
    <br>
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
<script type="text/javascript">
  function cekPassword() {
    var pass1 = document.getElementById('passwordbaru').value;
    var pass2 = document.getElementById('passwordulang').value;
    if (pass1 != pass2) {
      alert("password tidak sama");
    }
  }
</script>
</body>

</html>
