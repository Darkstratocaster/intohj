<?php include "menu.php"; ?>
<h2>Session</h2>
<p>
  Sessionin avulla voidaan luoda muuttujia joihin pääsee käsiksi kaikista php-
  tiedostoista.
</p>
<p>
  Sessio luodaan kutsumalla funktiota session_start().
  Sessio tuhotaan kutsumalla funktiota session_destroy()-
</p>
<p>
  Ennenkuin session_destroy funktiota voi kutsua, pitää kutsua funktiota
  session_start
</p>
<p>
  Sessio-muuttujat luodaan taulukkoon nimeltä $_SESSION.
</p>
<?php
  session_start();
  if(isset($_SESSION['logged_in'])) {
    echo '<p>Tervetuloa '.$_SESSION['username'].'</p>';
  }
  else {
    echo '<p>Tervetuloa Vieras</p>';
  }
 ?>
 <?php include "footer.php"; ?>
