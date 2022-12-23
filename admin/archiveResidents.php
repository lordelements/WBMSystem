<?php

include ('../condb.php');

$id = $_GET['id'];

$sql2 = "UPDATE residents SET status='1' WHERE residentid='$id'";
		$result = mysqli_query($cn,$sql2);

		function myAlert1($msg, $url){
		echo '<script language="javascript">alert("'.$msg.'");</script>';
		echo "<script>document.location = '$url'</script>";
		}
		myAlert1("Account Status Changed!", "residents.php");

?>