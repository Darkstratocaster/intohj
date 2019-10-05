<?php
include "connection.php";
$stmt=$db->prepare("UPDATE customers SET fname=:en, lname=:sn WHERE id_customers=:id");
$stmt->bindParam(':id',$_POST['id']);
$stmt->bindParam(':en',$_POST['en']);
$stmt->bindParam(':sn',$_POST['sn']);
if($stmt->execute()){
header('Location:database.php');
}
else {
   include "menu.php";
   echo 'Päivitys epäonnistui';
   include "footer.php";
}

 ?>
