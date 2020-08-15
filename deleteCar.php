
<?php
include("connect.php");
$sql="DELETE FROM car WHERE c_id=:id";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':id'=>$_GET['c_id']));
header("location:viewCar.php");

?>