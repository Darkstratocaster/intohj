<?php
print_r($_POST);
include 'connection.php';
$encrypted_pass = password_hash($_POST['password'],PASSWORD_DEFAULT);

$stmt=$db->prepare("INSERT INTO user (username,password) VALUES (:username,
  :password)");
$stmt->bindParam(':username',$_POST['username']);
$stmt->bindParam(':password',$encrypted_pass);
$stmt->execute();

 ?>
