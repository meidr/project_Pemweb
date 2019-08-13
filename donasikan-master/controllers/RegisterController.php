<?php
include('../models/UserModel.php');
include('../etc/Alert.php');
require('../etc/Koneksi.php');

class RegisterController
{
  public $model;
  public $mysqli;

  function __construct($nama,$email,$password,$status,$no_rekening,$alamat,$no_hp,$foto)
  {
    $this->model = new UserModel($nama,$email,$password,$status,$no_rekening,$alamat,$no_hp,$foto);
    $conn = new Koneksi();
    $this->mysqli = $conn->mysqli;
  }

  public function createUser()
  {
    $nama = $this->model->getNama();
    $email = $this->model->getEmail();
    $password = $this->model->getPassword();
    $status = $this->model->getStatus();
    $no_rekening = $this->model->getNoRekening();
    $alamat = $this->model->getAlamat();
    $no_hp = $this->model->getNoHp();
    $foto = $this->model->getFoto();
    $input = $this->mysqli->query("INSERT INTO users VALUES
      ('$nama','$email','$password','$status','$no_rekening','$alamat','$no_hp','$foto')");
  }
}

$control = new RegisterController($_POST['name'],$_POST['email'],md5($_POST['password']),"pengguna"
          ,$_POST['noRekening'],$_POST['alamat'],$_POST['noHP'],"blank");
$control->createUser();
header("Location: ../login.html");
?>
