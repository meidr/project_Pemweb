<?php

class LogOutController
{
  public function keluar()
  {
    session_start();
    session_destroy();
    header("Location: ../index.php");
  }
}

$control = new LogOutController();
$control->keluar();
 ?>
