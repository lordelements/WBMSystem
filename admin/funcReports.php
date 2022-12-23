<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$incident = $_POST['incident'];
$incidentplace = $_POST['incidentplace'];
$complainant = $_POST['complainant'];
$complainee = $_POST['complainee'];
$witness1 = $_POST['witness1'];
$witness2 = $_POST['witness2'];
$narrative = $_POST['narrative'];
$dateandtime = $_POST['dateandtime'];

$res = mysqli_query($cn, "INSERT INTO reports (incident, incidentplace, complainant, complainee, witness1, witness2, narrative, dateandtime, status) VALUES ('$incident','$incidentplace','$complainant','$complainee','$witness1','$witness2','$narrative','$dateandtime','0')");
	
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Record added successfully!", "reports.php");

?>