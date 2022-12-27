<?php 

include 'condb.php';
session_start();

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pass = $_POST['pw'];
$conpass = $_POST['cpw'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$position = $_POST['position'];

$full = $fname . ' ' . $mname . ' ' . $lname;

$res = mysqli_query($cn, "SELECT * FROM accounts where email = '$email'");

if($pass == $conpass){
	if($res && mysqli_num_rows($res)>0)
	{
	  	function myAlert($msg, $url)
		{
	    echo '<script language="javascript">alert("'.$msg.'");</script>';
	    echo "<script>document.location = '$url'</script>";
		}
		myAlert("Email already taken!", "index.php");
	}
	else {

		$fileName = $_FILES['myfile']['name'];
		$filetype = $_FILES["myfile"]["type"];
		$filesize = $_FILES["myfile"]["size"];
	    $tempName = $_FILES['myfile']['tmp_name'];

	    if(isset($fileName))
	    {
	        if(!empty($fileName))
	        {

	    		if (!file_exists("images/".$email)) 
	    		{
				    mkdir("images/".$email);
				}

				$finaldir = "images/".$email."/";

	        	$location = $finaldir;

	            if(move_uploaded_file($tempName, $location.$fileName))
	            {
	                //echo 'File Uploaded';
	            }
	            else {
	            	//echo 'File Not Uploaded';
	            }

	            $idcard = $location.$fileName;
	        }
	    }

		$sql2 = "INSERT INTO accounts(fname,mname,lname,email,password,idcard,contactnumber,address,position,status) VALUES ('$fname','$mname','$lname','$email','$pass','$idcard','$contact','$address','$position','1')";
		// $sql2 = "INSERT INTO accounts(fname,mname,lname,email,password,idcard,contactnumber,address,position,status) VALUES ('$fname','$mname','$lname','$email','$pass','$idcard','$bspermit','$contact','$address','$position','1')";
		$result = mysqli_query($cn,$sql2);

		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("Registered Successfully! You can now login.", "index.php");
	}
}
else {
	function myAlert1($msg, $url){
	echo '<script language="javascript">alert("'.$msg.'");</script>';
	echo "<script>document.location = '$url'</script>";
	}
	myAlert1("Password and confirm password does not match!", "index.php");
}




?>