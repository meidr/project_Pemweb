<?php

class PengirimanModel
{
  private $id;
  private $judul;
  private $pendonasi;
  private $jumlah;

  function __construct()
  {

  }

  public function setId($id)
  {
    $this->id = $id;
    return $this;
  }

  public function setJudul($judul)
  {
    $this->judul = $judul;
    return $this;
  }

  public function setPendonasi($pendonasi)
  {
    $this->pendonasi = $pendonasi;
    return $this;
  }

  public function setJumlah($jumlah)
  {
    $this->jumlah = $jumlah;
    return $this;
  }
  
  public function getId()
  {
    return $this->id;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function getPendonasi()
  {
    return $this->pendonasi;
  }

  public function getJumlah()
  {
    return $this->jumlah;
  }

}




?>
