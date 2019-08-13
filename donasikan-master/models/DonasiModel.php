<?php
class DonasiModel
{
  private $id_donasi;
  private $judul;
  private $target;
  private $tgl_expired;
  private $foto;
  private $deskripsi_donasi;
  private $email;
  private $no_rekening;
  private $no_hp;
  private $status;
  private $nama;
  private $tgl_donasi;
  private $donasi_terkumpul;

  function __construct($judul,$target,$tgl_expired,$foto,$deskripsi_donasi,$email,$no_rekening,$no_hp,$nama)
  {
    $this->judul=$judul;
    $this->target=$target;
    $this->tgl_expired=$tgl_expired;
    $this->deskripsi_donasi=$deskripsi_donasi;
    $this->foto=$foto;
    $this->no_rekening=$no_rekening;
    $this->email=$email;
    $this->no_hp=$no_hp;
    $this->status=0;
    $this->nama=$nama;

    $tgl_sekarang = new DateTime();
    $this->tgl_donasi=$tgl_sekarang->format('Y-m-d');
    $this->donasi_terkumpul=0;
  }


  public function getIdDonasi()
  {
    return $this->id_donasi;
  }

  public function getJudul()
  {
    return $this->judul;
  }

  public function getTarget()
  {
    return $this->target;
  }

  public function getTglExpired()
  {
    return $this->tgl_expired;
  }

  public function getFoto()
  {
    return $this->foto;
  }

  public function getDeskripsiDonasi()
  {
    return $this->deskripsi_donasi;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getNoRekening()
  {
    return $this->no_rekening;
  }

  public function getNoHp()
  {
    return $this->no_hp;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function getTglDonasi()
  {
    return $this->tgl_donasi;
  }

  public function getDonasiTerkumpul()
  {
    return $this->donasi_terkumpul;
  }

}

?>
