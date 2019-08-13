<?php

class SettingController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilDonasiSudahAcc($email)
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE email = '$email' && status = 1 ORDER BY tgl_donasi DESC");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function tampilDonasiBelumAcc($email)
  {
    $rs = $this->mysqli->query("SELECT * FROM `donasi` WHERE email = '$email' && status = 0 ORDER BY tgl_donasi DESC");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function tampilDataUser($email)
  {
    $rs = $this->mysqli->query("SELECT * FROM `users` WHERE email = '$email'");
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
