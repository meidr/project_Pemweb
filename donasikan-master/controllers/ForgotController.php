<?php
include('../etc/Alert.php');
require('../etc/Koneksi.php');

class ForgotController
{
  public $mysqli;
  function __construct()
  {
    $conn = new Koneksi();
    $this->mysqli = $conn->mysqli;
  }

  public function updatePassword($email)
  {
    $this->mysqli->query("UPDATE `users` SET `password` = '827ccb0eea8a706c4c34a16891f84e7b' WHERE `users`.`email` = '$email'");
  }
}

$kontrol = new ForgotController();
$kontrol->updatePassword($_POST['email']);
header("Location: ../login.html");
 ?>
