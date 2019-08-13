<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Profil</title>
  </head>
  <body>
    <h1>Profil</h1>
    <form action="controllers/ProfilController.php" method="post">
      <pre>
        Username     : <input type="text" name="username">
        Password     : <input type="text" name="password">
        No. Rekening : <input type="text" name="rekening">
        No. Hape     : <input type="text" name="noHP">
        Alamat       : <input type="text" name="alamat">
                       <input type="submit" name="simpan" value="Simpan Perubahan">
      </pre>
    </form>
  </body>
</html>
