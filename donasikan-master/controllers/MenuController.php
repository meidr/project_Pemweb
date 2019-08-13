<?php
class MenuController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilListDonasi()
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE status=1");
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
