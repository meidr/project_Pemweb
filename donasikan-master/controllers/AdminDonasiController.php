<?php
class AdminDonasiController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilListDonasi()
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi`");
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
}


if (isset($_GET['delete'])) {
  if ($_GET['delete']=1) {
    include("../etc/Koneksi.php");
    $kontrol = new AdminDonasiController();
    $kontrol->deleteDonasi($_GET['id']);
    header("Location: ../admin_donasi.php");
  }
}
 ?>
