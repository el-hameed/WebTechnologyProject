<html>
<head>
	<title>viewCar</title>
</head>
<body>
<span style="font-size: 30px;color: blue;">The Recorded Customer Data </span>
<table border="1px" width="35%">
<tr>
<td>Brand Name</td>
<td>Model</td>
<td>Color</td>
<td>Fuel</td>
<td>Price</td>
<td>Edit</td>
<td>Delete</td>
</tr>

<?php
include("connect.php");
$sql="SELECT c_id,Brand,Model,Color,Fuel,price from car";
$stmt=$pdo->query($sql);
While($row=$stmt->fetch(PDO::FETCH_ASSOC))
{
	$id=$row['c_id'];
	$brand=$row['Brand'];
	$model=$row['Model'];
	$color=$row['Color'];
	$fuel=$row['Fuel'];
	$price=$row['price'];
	echo "
	<tr>
	<td>$brand</td>
	<td>$model</td>
	<td>$color</td>
	<td>$fuel</td>
	<td>$price</td>
	<td><a href='editCar.php? c_id=$id'>Edit</a></td>
	<td><a href='deleteCar.php? c_id=$id'>Delete</a></td></tr>";
}
?>
</table>
</body>
</html>
