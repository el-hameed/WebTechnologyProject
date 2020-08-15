<!DOCTYPE html>
<html>
<head>
	<title>register_customer</title>
	<style type="text/css">
		label{
			box-sizing: 30px;
			display: block;
			padding: 10px;
			font-size: 25px;
			color: red;
			text-align: center;
			background-color: skyblue;
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
<h2>Fill your record here</h2>
	<form method="post">
	<table width="30%">
	<tr>
		<td><label>Full Name:</label></td>
		<td><input type="text" name="name" required=""></td>
	</tr>
	<tr>
		<td><label>Address:</label></td>
		<td><input type="text" name="address" required=""></td>
	</tr>
	
	<tr>
		<td><label>Email:</label></td>
		<td><input type="Email" name="email" required="" required=""></td>
	</tr>

	<tr>
		<td><label>Gender:</label></td>
		<td><input type="radio" name="gender" value="male">Male
		<input type="radio" name="gender" value="female">Female</td>
	</tr>
	<tr>
		<td colspan="2"><label ><input type="submit" name="Addcustomer" value="Register"></label></td>
	</tr>
  </table>
	</form>
</div>

<?php
include("connect.php");
if(isset($_POST['Addcustomer']))
{
$name=$_POST['name'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$email=$_POST['email'];

$sql="INSERT INTO customer(FullName,Address,C_email,Gender)VALUES(:name,:address,:email,:gender)";
$stmt=$pdo->prepare($sql);
$stmt->execute(array(':name'=>$name,':address'=>$address,':email'=>$email,':gender'=>$gender,));
exit();
}
?>


</body>
</html>