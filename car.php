<!DOCTYPE html>
<html>
<head>
	<title>Car</title>
	<style type="text/css">
		label{
			box-sizing: 30px;
			display: block;
			padding: 10px;
			font-size: 25px;
			color: red;
			text-align: center;
			background-color:skyblue;
			border-style: ridge;
			border-radius: 10px;
		}
		input{
			box-sizing: 25px;
			display: block;
			padding: 10px;
			font-size: 25px;
			border-radius: 10px;
			border-color: red;
		}
		h2{
			box-sizing: 30px;
			display: block;
			padding: 10px;
			font-size: 30px;
			color: green;
		}
	</style>
</head>
<body>
<div>
<h2>Fill Car record here</h2>
	<form method="post">
	<table width="30%">
	<tr>
		<td><label>BrandName:</label></td>
		<td><input type="text" name="brand" required=""></td>
	</tr>
	<tr>
		<td><label>Model:</label></td>
		<td><input type="text" name="model" required=""></td>
	</tr>
	<tr>
		<td><label>Color:</label></td>
		<td><input type="text" name="color" required=""></td>
	</tr>
	
	<tr>
		<td><label>Price</label></td>
		<td><input type="number" name="price" required=""></td>
	</tr>
	<tr>
		<td><label>Fuel:</label></td>
		<td><input type="radio" name="fuel" value="petrol">Petrol
		<input type="radio" name="fuel" value="diesel">Diesel</td>
	</tr>
	<tr>
		<td colspan="2"><label><input type="submit" value="Register" name="Addcar"></label></td>
	</tr>
  </table>
	</form>
</div>
<?php
include("connect.php");
if(isset($_POST['Addcar']))
{
$brand=$_POST['brand'];
$model=$_POST['model'];
$color=$_POST['color'];
$fuel=$_POST['fuel'];
$price=$_POST['price'];

$sql="INSERT INTO car(Brand,Model,Color,price,Fuel)VALUES(:brand,:model,:color,:price,:fuel)";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':brand'=>$brand,':model'=>$model,':color'=>$color,':price'=>$price,':fuel'=>$fuel,));
exit();
}
?>
</body>
</html>