<!DOCTYPE html>
<html>
<head>
	<title>viewCustomer</title>
</head>
<body>
<span style="font-size: 30px;color: blue;">The Recorded Customer Data </span>
<table border="1px" width="35%">
<tr>
<td>Name</td>
<td>Address</td>
<td>Gender</td>
<td>Email</td>
<td>Delete</td>
</tr>

<?php
include("connect.php");
$sql="SELECT id,FullName,Address,Gender,C_email from customer";
$stmt=$pdo->query($sql);
While($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
    $id=$row['id'];
	$name=$row['FullName'];
	$address=$row['Address'];
	$sex=$row['Gender'];
	$email=$row['C_email'];
	echo "
	<tr>
	<td>$name</td>
	<td>$address</td>
	<td>$sex</td>
	<td>$email</td>
		<td><a href='deleteCustomer.php? id=$id'>Delete</a></td></tr>";
}
?>
</body>
</html>