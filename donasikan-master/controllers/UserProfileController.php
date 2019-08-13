<?php
include("../models/UserModel.php");
include("../etc/Koneksi.php");

class UserProfileController
{
  public $model;
  public $mysqli;

  function __construct($nama,$email,$password,$status,$no_rekening,$alamat,$no_hp,$foto)
  {
    $this->model = new UserModel($nama,$email,$password,$status,$no_rekening,$alamat,$no_hp,$foto);
    $con = new Koneksi();
    $this->mysqli = $con->mysqli;
  }

  public function userUpdate() : bool
  {
    $nama = $this->model->getNama();
    $email = $this->model->getEmail();
    $password = $this->model->getPassword();
    $status = $this->model->getStatus();
    $no_rekening = $this->model->getNoRekening();
    $alamat = $this->model->getAlamat();
    $no_hp = $this->model->getNoHp();
    $foto = $this->model->getFoto();
  }

  public function updateFoto($email,$foto)
  {
    $update = $this->mysqli->query("UPDATE `users` SET `foto` = '$foto' WHERE `users`.`email` = '$email'");
  }

  public function pindahFile()
  {
    $lokasi = "../foto/";
    $lokasi = $lokasi . basename($_FILES['foto']['name']);
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $lokasi)) {
      echo "<script> pesan('Gambar Terupload') </script>";
    } else {
      echo "<script> pesan('Gambar TIDAK Terupload') </script>";
    }
  }

  public function updateProfil($nama,$email,$no_hp,$no_rekening,$alamat,$email_sebelumnya)
  {
    $update = $this->mysqli->query("UPDATE `users` SET `nama` = '$nama', `email` = '$email',
      `no_rekening` = '$no_rekening', `alamat` = '$alamat', `no_hp` = '$no_hp'
      WHERE `users`.`email` = '$email_sebelumnya'");
    }

    public function updatePassword($email,$password)
    {
      $update = $this->mysqli->query("UPDATE `users` SET `password` = '$password' WHERE `users`.`email` = '$email'");
    }
  }



  // main
  session_start();
  if (isset($_GET['updateFoto'])) {
    if ($_GET['updateFoto'] ==1) {
      $pc = new UserProfileController("","","","","","","","");
      $email =$_SESSION['email'];
      $pc->updateFoto($email,$_FILES['foto']['name']);
      $pc->pindahFile();
      header('Location: ../userprofile.php');
    }
  }

  if (isset($_GET['updateProfil'])) {
    if ($_GET['updateProfil'] == 1) {
      $pc = new UserProfileController("","","","","","","","");
      $pc->updateProfil($_POST['nama'], $_POST['email'], $_POST['kontak'], $_POST['nomorrek'], $_POST['alamat'], $_SESSION['email']);
      $_SESSION['username'] = $_POST['nama'];
      $_SESSION['email'] = $_POST['email'];
      $_SESSION['no_hp'] = $_POST['kontak'];
      $_SESSION['no_rekening'] = $_POST['nomorrek'];
      $_SESSION['alamat'] = $_POST['alamat'];
      header('Location: ../userprofile.php');
    }
  }

  if (isset($_GET['gantiPass'])) {
    if (isset($_GET['gantiPass']) == 1) {
      $pass = md5($_POST['password']);
      $passbaru = md5($_POST['passwordbaru']);
      $passSekarang = $_SESSION['pass'];
      if ($pass == $passSekarang) {
        $pc = new UserProfileController("","","","","","","","");
        $pc->updatePassword($_SESSION['email'],$passbaru);
        $_SESSION['pass'] = $passbaru;
        header("Location: ../userprofile.php");
      }
    }
  }

  ?>
