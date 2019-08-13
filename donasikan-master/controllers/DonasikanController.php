<?php
include("../etc/Koneksi.php");
include("../models/PengirimanModel.php");

class DonasikanController
{
  public $mysqli;
  public $model;

  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function getDataDonasi($id)
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE id_donasi=$id");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function tambahJumlahDonasi($id,$tambah)
  {
    $rows = $this->getDataDonasi($id);
    $row = $rows[0];
    $donasiSekarang = (double)$row['donasi_terkumpul'];
    $donasiTambah = $donasiSekarang+$tambah;
    $update = $this->mysqli->query("UPDATE `donasi` SET `donasi_terkumpul` = '$donasiTambah' WHERE `donasi`.`id_donasi` = $id");
  }

  public function tambahDataPengiriman($model)
  {
    $id = $model->getId();
    $judul = $model->getJudul();
    $pendonasi = $model->getPendonasi();
    $jumlah = $model->getJumlah();
    $tambah = $this->mysqli->query("INSERT INTO `pengiriman` (`id`, `judul`, `pendonasi`, `jumlah`)
    VALUES (NULL, '$judul', '$pendonasi', '$jumlah')");
  }

  public function cekStatusLengkap($id)
  {
    $update = $this->mysqli->query("UPDATE `donasi` SET `lengkap` = '1' WHERE `donasi`.`id_donasi` = $id
    AND `donasi`.`donasi_terkumpul` >= `donasi`.`target`");
  }
}
session_start();
$kontrol = new DonasikanController();
$kontrol->tambahJumlahDonasi($_SESSION['id_donasi'], (double)$_GET['donasikan']);

$model = new PengirimanModel();
$model->setId("");
$model->setJudul($_GET['judul']);
$model->setPendonasi($_GET['nama']);
$model->setJumlah($_GET['donasikan']);

$kontrol->tambahDataPengiriman($model);
$kontrol->cekStatusLengkap($_SESSION['id_donasi']);
header("Location: ../informasikirim.php");
 ?>
