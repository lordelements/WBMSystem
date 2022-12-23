<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$position = $_POST['position'];
$termyears = $_POST['termyears'];
$yearstarted = $_POST['yearstarted'];

$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$civilstatus = $_POST['civilstatus'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$full = $lastname . " " . $middlename . " " . $firstname;

//Initiation of files uploaded by the user
	$fileName = $_FILES['myfile']['name'];
	$filetype = $_FILES["myfile"]["type"];
	$filesize = $_FILES["myfile"]["size"];
    $tempName = $_FILES['myfile']['tmp_name'];

    //Checking if the variable has its value.
    if(isset($fileName))
    {
    	//If filename is not yet inside the database.
        if(!empty($fileName))
        {
        	//Creating a folder.
    		if (!file_exists("../images/".$full)) 
    		{
			    mkdir("../images/".$full);
			}

			$finaldir = "../images/".$full."/";

			//Transferring the pictures from the input type to the folder.
        	$loc = $finaldir;
            if(move_uploaded_file($tempName, $loc.$fileName))
            {
                //echo 'File Uploaded';
            }
            else {
            	//echo 'File Not Uploaded';
            }

            $idcard = $loc.$fileName;
        }
    }

$res = mysqli_query($cn, "INSERT INTO officials (position, lastname, middlename, firstname, gender, birthdate, civilstatus, address, idcard, contact,termyears,yearstarted, status) VALUES ('$position','$lastname','$middlename','$firstname','$gender','$birthdate','$civilstatus','$address','$idcard','$contact','$termyears','$yearstarted','0')");
	
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Record added successfully!", "../admin/officials.php");

?>