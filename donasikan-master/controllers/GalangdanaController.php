<?php
include("../models/DonasiModel.php");
include("../etc/Koneksi.php");

class GalangdanaController
{
  public $model;
  public $mysqli;

  function __construct($judul,$target,$tgl_expired,$foto,$deskripsi_donasi,$email,$no_rekening,$no_hp,$nama)
  {
    $this->model = new DonasiModel($judul,$target,$tgl_expired,$foto,$deskripsi_donasi,$email,$no_rekening,$no_hp,$nama);
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tambahDonasi()
  {
    $judul = $this->model->getJudul();
    $target = $this->model->getTarget();
    $tgl_expired = $this->model->getTglExpired();
    $foto = $this->model->getFoto();
    $no_rekening = $this->model->getFoto();
    $deskripsi_donasi = $this->model->getDeskripsiDonasi();
    $email = $this->model->getEmail();
    $no_rekening = $this->model->getNoRekening();
    $no_hp = $this->model->getNoHp();
    $nama = $this->model->getNama();
    $tgl_donasi = $this->model->getTglDonasi();

    $tambah = $this->mysqli->query("INSERT INTO `donasi` (`id_donasi`, `judul`, `target`, `tgl_expired`,
      `foto`, `deskripsi_donasi`, `email`, `no_rekening`, `no_hp`, `status`, `nama`,
      `tgl_donasi`, `donasi_terkumpul`)
      VALUES (NULL, '$judul', '$target', '$tgl_expired',
        '$foto', '$deskripsi_donasi', '$email', '$no_rekening', '$no_hp', '0', '$nama',
        '$tgl_donasi', '0')");

  }

  public function pindahFile()
  {
    $lokasi = "../bukti/";
    $lokasi = $lokasi . basename($_FILES['foto']['name']);
    if(move_uploaded_file($_FILES['foto']['tmp_name'], $lokasi)) {
      echo "<script> pesan('Gambar Terupload') </script>";
    } else {
      echo "<script> pesan('Gambar TIDAK Terupload') </script>";
    }
  }
}
session_start();
$kontrol = new GalangdanaController($_POST['judul'],$_POST['target'], $_POST['expired'],
$_FILES['foto']['name'], $_POST['deskripsi'], $_SESSION['email'], $_SESSION['no_rekening'], $_SESSION['no_hp'], $_SESSION['username']);
$kontrol->tambahDonasi();
$kontrol->pindahFile();
header("Location: ../index.php")
?>
