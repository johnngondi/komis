<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/staff_acts_data_functions.php';

$title = "Activate Staff";

$conn = dbconnect();
$visibility = "hidden";


if($conn){
	$staffs = getActivationDetails($conn);

	if ($staffs == !NULL) {
		$visibility = "visible";

	}else{
		$visibility = "hidden";
		
	}

	if (isset($_GET['staffid'])) {
		$staffid = $_GET['staffid'];

		$results = activateStaff($conn,$staffid);
		if ($results) {

		require 'model/logsys.php';

		$details = "Staff StaffId = $staffid Activated";
		logSystem($conn,$details);

		
			header("location:validatestaff.php?state=1");	
		}else{
			$activated = "<p class=\"text-danger centering\">Staff Activation failed. Please try again.</p>";
		}

	}
			
}else{
	die('Error while connecting.');
}
require '_inc/header.php';
require 'views/validatestaff.view.php';
require '_inc/footer.php';
?>