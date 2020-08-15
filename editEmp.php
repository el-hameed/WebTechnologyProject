<?php
include("connect.php");
if(isset($_POST['UpdateEmp']))
{
       $id=$_POST['EmpID'];
       $name=$_POST['name'];
       $address=$_POST['address'];
       $gender=$_POST['gender'];

    $sql = "UPDATE employee SET EmpID=:id,FullName=:name,Address=:address,Gender=:gender WHERE EmpID=:id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':id'=>$id,':name'=>$name,':address'=>$address,':gender'=>$gender));
     header( 'Location:vieweEmp.php' );
  }

  	
  if (isset($_GET['EmpID'])) {
           $id= $_GET['EmpID'];
          $sql="Select * from employee where EmpID='$id'"; 
          $stmt=$pdo->query($sql);
          $row=$stmt->fetch(PDO::FETCH_ASSOC);
      }
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit_employee</title>
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
<h2>Edit Employee record here</h2>
	<form method="post">
	<table width="30%">
	<tr>
		<td><label>EmployeeID:</label></td>
		<td><input type="text" name="EmpID" value="<?php echo $row['EmpID']?>" required=""></td>
	</tr>
	<tr>
		<td><label>Full Name:</label></td>
		<td><input type="text" name="name" value="<?php echo $row['FullName'] ?>" required=""></td>
	</tr>
	<tr>
		<td><label>Address:</label></td>
		<td><input type="text" name="address" value="<?php echo $row['Address'] ?>" required=""></td>
	</tr>
	<tr>
		<td><label>Gender:</label></td>
		<td><input type="radio" name="gender" value="">Male
		<input type="radio" name="gender" value="">Female</td>
	</tr>
	<tr>
		<td colspan="2"><label><input type="submit" value="Update Record" name="UpdateEmp"></label></td>
	</tr>
  </table>
	</form>
</div>
</body>
</html>