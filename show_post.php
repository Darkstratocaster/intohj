<?php include "menu.php"; ?>
<h2>Post data</h2>
<p>
  Post data on seuraava:
  <?php print_r($_POST);?>
</p>
<p>
  <?php
  echo 'Etunimi on '.$_POST['en']
   ?>
</p>
<?php include "footer.php"; ?>
