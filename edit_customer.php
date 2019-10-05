<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
$stmt=$db->prepare("SELECT id_customers,fname,lname FROM customers WHERE
  id_customers=:id");
  $stmt->bindParam(':id',$_GET['id']);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  print_r($result);


 ?>
 <form class="" action="save_edited.php" method="post">
   <input type="hidden" name="id" value="<?php echo $result[0]['id_customers']; ?>"> <br>
   <input type="text" name="en" value="<?php echo $result[0]['fname']; ?>">
   <br>
   <input type="text" name="sn" value="<?php echo $result[0]['lname']; ?>">
   <br>
   <br>
   <input type="submit" name="" value="Add">
 </form>
<?php include "footer.php"; ?>
