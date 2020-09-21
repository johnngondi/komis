<?php
require 'model/dbfunctions.php';

//Just a session exists
if (!isset($_SESSION)) {
	header("Location: restricted.php");
	die('No appropriate rights to access the file');
}

require 'model/datafunctions.php';
$title = "Change Password";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = dbconnect();

	if ($conn) {
		$oldpass = htmlspecialchars($_POST['oldpass']);
		$newpass = htmlspecialchars($_POST['password']);

		
		if (isset($_SESSION['patid'])) {
			$idno = $_SESSION['patid'];

		}elseif (isset($_SESSION['staffid'])) {
			$idno = $_SESSION['staffid'];
		}

		$data = array(
			'idno' => $idno,
			'oldpass' => $oldpass,
			'newpass' => $newpass,
		);

		//validate password
		$okpass = validatePassword($conn,$data);

		if ($okpass) {
			//reset password
			$resetpass = changePassword($conn,$data);

			if ($resetpass) {

				require 'model/logsys.php';

				$details = "Password change activity";
				logSystem($conn,$details);

				$status = "<p class=\"text-success centering\">Password changed Successfully</p>";
				
			}else{
				$status = "<p class=\"text-danger centering\">Error while changing password. Please try again. If the problem persists. Contact the System admin.</p>";
			}

		}else{
			$status = "<p class=\"text-danger centering\">Sorry the Old Password is wrong</p>";
		}

	}else{
		die('Error while connecting.');
	}
}
require '_inc/header.php';
require 'views/changepass.view.php';
require '_inc/footer.php';
?>