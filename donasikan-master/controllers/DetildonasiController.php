<?php
class DetildonasiController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function donasiLainnya()
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE status=1 ORDER BY tgl_donasi DESC");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
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

  public function sisaWaktu($expired)
  {
    $cr = new DateTime();
    $ex = new DateTime($expired);
    $sisa = $ex->diff($cr);
    return $sisa->d;
  }
}
?>
