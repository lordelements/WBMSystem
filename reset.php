<?php

include 'condb.php';
session_start();
		/* Namespace alias (don't need Exception this time). */
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		/* Include the Composer generated autoload.php file. */
		require 'C:\xampp\composer\vendor\autoload.php';

$fname = $_POST['fname'];

if (isset($_POST['mname'])){
$mname = $_POST['mname'];
}
else {
	$mname = "";
}

$lname = $_POST['lname'];
$email = $_POST['email'];
$contact = $_POST['contact'];

$full = $fname . ' ' . $mname . ' ' . $lname;
$rando = rand(1000,9999);
$newpass = "default" . $rando;

$sql = mysqli_query($cn, "SELECT * FROM accounts WHERE fname='$fname' AND mname='$mname' AND lname='$lname' AND contactnumber='$contact' AND email='$email'");
$row = mysqli_fetch_assoc($sql);
$logid = $row['logid'];

	if($row <> 0){

		$query = mysqli_query($cn, "UPDATE accounts SET password='$newpass' WHERE logid='$logid'");

		/* Create a new PHPMailer object. */
		$mail = new PHPMailer();

		   $mail->setFrom('hrsystem.c22@gmail.com', 'Barangay Zone 1 Bulan Sorsogon');
		   $mail->addAddress($email,$full);
		   $mail->Subject = 'New Password Request';
		   $mail->Body = 'This is your new password "' . $newpass . '" Kindly login to the website using this password.';

		   /* Tells PHPMailer to use SMTP. */
		   $mail->isSMTP();
		   $mail->Host = 'smtp.gmail.com';
		   $mail->SMTPAuth = TRUE;
		   $mail->SMTPSecure = 'ssl';
		   $mail->Username = 'hrsystem.c22@gmail.com';
		   $mail->Password = 'irentc22';
		   $mail->Port = 465;

		   /* Finally send the mail. */
			if (!$mail->send())
			{
			   /* PHPMailer error. */
			   echo $mail->ErrorInfo;
			}
			function myAlert($msg, $url)
				{
			    echo '<script language="javascript">alert("'.$msg.'");</script>';
			    echo "<script>document.location = '$url'</script>";
				}
			myAlert("New password was sent to your email.", "index.php");
	}
	else {
		function myAlert($msg, $url)
				{
			    echo '<script language="javascript">alert("'.$msg.'");</script>';
			    echo "<script>document.location = '$url'</script>";
				}
		myAlert("Account not found.", "index.php");
	}

?>