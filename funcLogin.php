<?php
include("condb.php");
$email = $_POST['email'];
$password = $_POST['password'];
$sql= mysqli_query($cn,"SELECT * FROM accounts WHERE email= '$email' AND password= '$password'");
$row= mysqli_num_rows($sql);
$rows=mysqli_fetch_assoc($sql);

session_start();

$log = $rows['acctype'];

	if($row<>0)
	{
		$_SESSION['email'] = $email;
		$_SESSION['logid'] = $logid;
		header("location:admin/index.php");
	}
	else
	{
		header("location:../index.php?status=Failed");
	}


?>