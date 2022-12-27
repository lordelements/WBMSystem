<?php 

include ('../condb.php');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();

$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$firstname = $_POST['firstname'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$civilstatus = $_POST['civilstatus'];
$address = $_POST['address'];
$contact = $_POST['contact'];

$full = $lastname . " " . $middlename . " " . $firstname;
$randomizer = rand(100000,999999);

/*"Email": "andrianelemento08@gmail.com",
"Password": "24681357 ",
"Recipients": [ "$contact"],
"Message": "If requested, your OTP is.",
"ApiCode": "TR-ANDRI265598_9PE3F",
"SenderId": "ITEXMO SMS"*/

function itexmo($number,$message,$apicode,$passwd)
{
	$ch = curl_init();
	$itexmo = array('1' => $number, '2' => $message, '3' => $apicode, 'passwd' => $passwd);
	curl_setopt($ch, CURLOPT_URL,"https://www.itexmo.com/php_api/api.php");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($itexmo));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	return curl_exec ($ch);
	curl_close ($ch); 

}

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

$res = mysqli_query($cn, "INSERT INTO residents (lastname, middlename, firstname, gender, birthdate, civilstatus, address, idcard, contact, status) VALUES ('$lastname','$middlename','$firstname','$gender','$birthdate','$civilstatus','$address','$idcard','$contact','0')");
	
	function myAlert($msg, $url)
	{
    echo '<script language="javascript">alert("'.$msg.'");</script>';
    echo "<script>document.location = '$url'</script>";
	}
	myAlert("Record added successfully!", "../admin/residents.php");

?>