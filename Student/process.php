<?php
include 'database.php';
if(isset($_POST['submit']))
{
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$address = $_POST['address'];
	$number = $_POST['number'];
	$gender = $_POST['gender'];
	$sql="insert into student(firstName,lastName,email,class,address,number,gender) values('$firstName','$lastName','$email','$class','$address','$number','$gender')";
	if(mysqli_query($con,$sql))
	{
		echo "<script>alert('new record inserted')</script>";
	}
	else
	{
		echo "error:".mysqli_error($con);
	}
	mysql_close($con);
}
?>