<?php
include('../models/UserModel.php');
include('../etc/Alert.php');
require('../etc/Koneksi.php');

class LoginController
{
  public $mysqli;

  function __construct()
  {
    $conn = new Koneksi();
    $this->mysqli = $conn->mysqli;
  }

  public function auth($email,$password)
  {
    $rs = $this->mysqli->query("SELECT * FROM users WHERE email='$email'");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;

    }
    $getPass = $rows[0]['password'];
    if ($password == $getPass) {
      session_start();
      $_SESSION['login'] = true;
      $_SESSION['username'] = $rows[0]['nama'];
      $_SESSION['email'] = $rows[0]['email'];
      $_SESSION['no_hp'] = $rows[0]['no_hp'];
      $_SESSION['no_rekening'] = $rows[0]['no_rekening'];
      $_SESSION['alamat'] = $rows[0]['alamat'];
      $_SESSION['pass'] = $rows[0]['password'];
      
      if ($getPass=="21232f297a57a5a743894a0e4a801fc3" && $rows[0]['email']=="admin@admin.com" ) {
        header('Location: ../admin.php');

      }
      elseif ($getPass!="21232f297a57a5a743894a0e4a801fc3" && $rows[0]['email']!="admin@admin.com") {
        header('Location: ../index setelah log in.php');
      }

    }else{
      header('Location: ../login.html');
    }
  }
}

$control = new LoginController();
$control->auth($_POST['email'],md5($_POST['password']));
?>
