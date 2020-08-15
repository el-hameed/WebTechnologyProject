<?php
include("connect.php");
$sql="DELETE FROM customer WHERE id=:id";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':id'=>$_GET['id']));
header("location:viewCustomer.php");
?>
