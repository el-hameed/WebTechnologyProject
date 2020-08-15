<!DOCTYPE html>
<html>
<head>
	<title>viewEmp</title>
</head>
<body>
<span style="font-size: 30px;color: blue;">The Recorded Employee Data </span>
<table border="1px" width="35%">
<tr>
<td>EmployeeID</td>
<td>Name</td>
<td>Address</td>
<td>Gender</td>
<td>Edit</td>
<td>Delete</td>
</tr>

<?php
include("connect.php");
$sql="SELECT EmpID,FullName,Address,Gender from employee";
$stmt=$pdo->query($sql);
While($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	$id=$row['EmpID'];
	$name=$row['FullName'];
	$address=$row['Address'];
	$sex=$row['Gender'];
	echo "
	<tr><td>$id</td>
	<td>$name</td>
	<td>$address</td>
	<td>$sex</td>
	<td><a href='editEmp.php? EmpID=$id'>Edit</a></td>
	<td><a href='deleteEmp.php? EmpID=$id'>Delete</a></td></tr>";
}
?>
</body>
</html>