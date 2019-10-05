<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$stmt=$db->prepare("UPDATE customers SET fname=:en, lname=:sn WHERE id_customers=:id");
$stmt->bindParam(':id',$_POST['id']);
$stmt->bindParam(':en',$_POST['en']);
$stmt->bindParam(':sn',$_POST['sn']);
$stmt->execute();

echo 'Päivitys onnistui';
 ?>
<?php include "footer.php"; ?>
