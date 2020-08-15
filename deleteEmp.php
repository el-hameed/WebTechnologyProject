<?php
include("connect.php");
$sql="DELETE FROM employee WHERE EmpID=:id";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':id'=>$_GET['EmpID']));
header("location:vieweEmp.php");
echo "<button><a href='view.php'>View Record</a></button>";