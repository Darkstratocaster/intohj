<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$stmt=$db->prepare("DELETE FROM customers WHERE id_customers=:id");
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);
  echo 'Poistaminen onnistui';
?>

 <?php include "footer.php"; ?>
