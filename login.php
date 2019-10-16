<?php include "menu.php"; ?>
<?php include "connection.php" ?>
<?php
  $annettu_salasana=$_POST['password'];
  $annettu_tunnus=$_POST['username'];
  //$oikea_salasana='pass123';

  $stmt=$db->prepare("SELECT password from user where username=:username");
  $stmt->bindParam(':username',$annettu_tunnus);
  $stmt->execute();
  $oikea_salasana = $stmt->fetch(PDO::FETCH_COLUMN);

  if(password_verify($annettu_salasana,$oikea_salasana)) {
    session_start();
    $_SESSION['logged_in']=true;
    $_SESSION['username']=$annettu_tunnus;
    echo '<p>Olet kirjautunut sisään</p>';
  }
  else {
    echo '<p>Tunnus ja salasana eivät täsmää</p>';
  }
 ?>
<?php include "footer.php"; ?>
