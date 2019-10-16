<?php include "menu.php"; ?>

<?php
//print_r($_POST);
//echo '<br>';
//seuraava koodi sisältää SQL-injectionin
/*$add='INSERT INTO customers
VALUES("'.$_POST['en'].'","'.$_POST['sn'].'")';
echo $add;*/
$stmt=$db->prepare("INSERT INTO customers VALUES(:id, :en, :sn)");
$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':en', $_POST['en']);
$stmt->bindParam(':sn', $_POST['sn']);

if($stmt->execute()){
  echo 'Lisättiin asiakas: '.$_POST['id'].' '.$_POST['en'].' '.$_POST['sn'];
}
else{
  echo 'Lisäys epäonnistui';
}

 ?>

<?php include "footer.php"; ?>
