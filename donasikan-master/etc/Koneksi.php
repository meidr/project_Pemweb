<?php

class Koneksi
{
  public $mysqli;
  function __construct()
  {
    $this->mysqli = new mysqli("localhost","root","","donasikan");
  }
}
 ?>
