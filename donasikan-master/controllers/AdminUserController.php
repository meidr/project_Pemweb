<?php
class AdminUserController
{
  public $mysqli;
  function __construct()
  {
    $kon = new Koneksi();
    $this->mysqli = $kon->mysqli;
  }

  public function tampilListUser()
  {
    $rs = $this->mysqli->query("SELECT * FROM `users` WHERE status ='pengguna'");
    $rows = array();
    while ($row = $rs->fetch_assoc()) {
      $rows[] = $row;
    }
    return $rows;
  }

  public function deleteUser($email)
  {
    $delete = $this->mysqli->query("DELETE FROM `users` WHERE email = '$email'");
  }
}

if (isset($_GET['delete'])) {
  if ($_GET['delete']=1) {
    include("../etc/Koneksi.php");
    $kontrol = new AdminUserController();
    $kontrol->deleteUser($_GET['email']);
    header("Location: ../admin_user.php");
  }
}
 ?>
