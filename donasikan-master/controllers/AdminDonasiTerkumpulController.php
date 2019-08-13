<?php
class AdminDonasiTerkumpulController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilListDonasiTerkumpul()
  {
    $rs = $this->mysqli->query("SELECT * FROM `pengiriman`");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function deleteDonasi($id)
  {
    $delete = $this->mysqli->query("DELETE FROM `pengiriman` WHERE id = $id");
  }
}


if (isset($_GET['delete'])) {
  if ($_GET['delete']=1) {
    include("../etc/Koneksi.php");
    $kontrol = new AdminDonasiTerkumpulController();
    $kontrol->deleteDonasi($_GET['id']);
    header("Location: ../admin_donasi_terkumpul.php");
  }
}
 ?>
