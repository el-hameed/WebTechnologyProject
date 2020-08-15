<!DOCTYPE html>
<html>
<head>
	<title>login</title>
</head>
<body bgcolor="skyblue">






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
			text-align: center;
		}
		.loginbox{
			background-color:#fff009; 
			height:60%;width: 30%; 
			float:left;
			margin-top:12%; 
			margin-left: 35%;
			border-radius: 10px;
			border-color: red;
			border-style: ridge;
		}
	.logpic{
     background-color: red; 
     width: 215px;
     height: 130px;
     float: left;
     margin-top: 5px;
     margin-left: 10px;
     margin-bottom: 5px;r
    }
	</style>
</head>
<body>
<div  class="loginbox" style="">
<div class="logpic"><img src="log1.jpg" alt="Log" style=" width:215px; height:130px;"></div>
<h2>Login here</h2>
	<form method="post">
	<table width="30%" style="margin: 6px;">
	<tr>
		<td><label>username:</label></td>
		<td><input type="text" name="username" required=""></td>
	</tr>
	<tr>
		<td><label>password:</label></td>
		<td><input type="password" name="password" required=""></td>
	</tr>
	<tr>
		<td colspan="2" class="logbt"><label><input type="submit" value="Login" name="login"></label></td>
	</tr>
  </table>
	</form>
</div>
<?php
include("connect.php");
if(isset($_POST['login']))
{
 $username=$_POST['username'];
 $password=$_POST['password'];
 $sql="SELECT User_name,password,role from user_account where User_name=? and password=?";
 $stmt=$pdo->prepare($sql);
 $stmt->execute(array($username,$password));
 
	if ($stmt->rowCount()==1) 
	{
	  header("location:adminpage.html");
	  }
	  else 
	   {
	  	echo "";
	  }  	
}

exit();
?>
</body>
</html>

