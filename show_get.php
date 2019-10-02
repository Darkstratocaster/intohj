<?php include "menu.php"; ?>
<h2>GET data</h2>
<p>
  Get data on seuraava:
  <?php print_r($_GET);?>
</p>
<p>
  <?php
  echo 'Etunimi on '.$_GET['en']
   ?>
</p>
<?php include "footer.php"; ?>
