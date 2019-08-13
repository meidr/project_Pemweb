<?php
class AdminController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilListDonasi()
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE status=0");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function deleteDonasi($id)
  {
    $delete = $this->mysqli->query("DELETE FROM `donasi` WHERE id_donasi = $id");
  }

  public function terimaDonasi($id)
  {
    $update = $this->mysqli->query("UPDATE `donasi` SET `status` = '1' WHERE `donasi`.`id_donasi` = $id");
  }
}

if (isset($_GET['delete'])) {
  if ($_GET['delete']=1) {
    include("../etc/Koneksi.php");
    $kontrol = new AdminController();
    $kontrol->deleteDonasi($_GET['id']);
    header("Location: ../admin.php");
  }
}
if (isset($_GET['terima'])) {
  if ($_GET['terima']=1) {
    include("../etc/Koneksi.php");
    $kontrol = new AdminController();
    $kontrol->terimaDonasi($_GET['id']);
    header("Location: ../admin.php");
    // echo "terima";
  }
}
 ?>
