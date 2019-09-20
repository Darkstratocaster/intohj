<?php include "menu.php"; ?>
	<h2>PHP Basic</h2>
	<p>
		This is the PHP Basic.
	</p>
	<h2>Variables</h2>
	<p>
	Muuttujien nimet alkavat aina dollarimerkillä.
</p>
 <?php
  $name="Juha";
	echo 'Terve '.$name;
 ?>
 <h2>if-else</h2>
 <?php
 $year=2019;
 if($year <2000) {
	 echo 'Ennen vuotta 2000';
 }
 else{
	 echo 'vuoden 2000 jälkeen';
 }
  ?>
	<h2>Loopit</h2>
	<p>
    PHP:ssä voi käyttää for, while ja foreach looppeja.
	</p>
	<?php
   for($x=1; $x <= 5; $x++){
		 echo 'Rivi '.$x.'<br>';
	 }
	 ?>
<?php include "footer.php"; ?>
