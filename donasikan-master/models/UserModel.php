<?php
class UserModel
{
  private $nama;
  private $email;
  private $password;
  private $status;
  private $no_rekening;
  private $alamat;
  private $no_hp;
  private $foto;
  
  function __construct($nama,$email,$password,$status,$no_rekening,$alamat,$no_hp,$foto)
  {
    $this->nama=$nama;
    $this->email=$email;
    $this->password=$password;
    $this->status=$status;
    $this->no_rekening=$no_rekening;
    $this->alamat=$alamat;
    $this->no_hp=$no_hp;
    $this->foto=$foto;
  }

  public function getNama()
  {
    return $this->nama;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function getPassword()
  {
    return $this->password;
  }

  public function getStatus()
  {
    return $this->status;
  }

  public function getNoRekening()
  {
    return $this->no_rekening;
  }

  public function getAlamat()
  {
    return $this->alamat;
  }

  public function getNoHp()
  {
    return $this->no_hp;
  }

  public function getFoto()
  {
    return $this->foto;
  }

}

?>
