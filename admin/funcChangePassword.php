<?php

include ('../condb.php');

$email = $_POST['email'];
$currpass = $_POST['currpass'];
$newpass = $_POST['newpass'];
$confpass = $_POST['confpass'];

$result = mysqli_query ($cn, "SELECT * FROM accounts WHERE email = '$email'");
$row = mysqli_fetch_assoc($result);



if($currpass == $row['password']){
	if($newpass == $confpass){
		$sql2 = "UPDATE accounts SET password='$newpass' WHERE email='$email'";
		$result = mysqli_query($cn,$sql2);

		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("Password Changed!", "viewAccount.php");
	}
	else {
		function myAlert($msg, $url)
		{
	    echo '<script language="javascript">alert("'.$msg.'");</script>';
	    echo "<script>document.location = '$url'</script>";
		}
		myAlert("New password and confirm password does not match!", "viewAccount.php");
	}
}
else {
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Incorrect Password!", "viewAccount.php");
}



?>