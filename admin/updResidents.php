<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$resid = $_POST['resid'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$firstname = $_POST['firstname'];
$birthdate = $_POST['birthdate'];
$civilstatus = $_POST['civilstatus'];
$address = $_POST['address'];
$contact = $_POST['contact'];

//echo $resid . " " . $lastname . " " . $middlename . " " . $firstname . " " . $birthdate . " " . $civilstatus . " " . $address . " " . $contact;

$res = mysqli_query($cn, "UPDATE residents SET lastname='$lastname', middlename='$middlename', firstname='$firstname', birthdate='$birthdate', civilstatus='$civilstatus', address='$address', contact='$contact' WHERE residentid='$resid'");
	
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Record updated successfully!", "residents.php");

?>