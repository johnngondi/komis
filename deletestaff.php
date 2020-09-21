<?php

require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/staff_acts_data_functions.php';
$title = "Delete Staff";

$visibility = "hidden";
if (!empty($_GET)) {
		$conn = dbconnect();

		if(isset($conn)){
			$staffid = htmlspecialchars($_GET['staffid']);
			$details = getStaffDetails($conn,$staffid);
			
			if (!$details) {
				$status = "Staff doesn't exist";

			}else{
				if ($details['state'] == 3 ) {
					$status = "<p class=\"text-danger centering\">This Staff Member was already deleted from the System. You can't delete them.</p>";
				
				}elseif ($details['state'] == 0) {
					$status = "<p class=\"text-danger centering\">This Staff has not been Activated yet. You can't delete them here.</p>";
								
				}else{
					$visibility = "visible";
					$name = $details['names'];
					$idno = $details['idnumber'];
					$email = $details['email'];
					$role = $details['role'];
					$postidno = $staffid;
	 									
				}
			}
		}else{
			echo "Something is wrong connecting";
			die();
		}
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = dbconnect();

		if(isset($conn)){
			$staffid = htmlspecialchars($_POST['postidno']);
			$result = deleteStaff($conn,$staffid);

			if (!$result) {
				$statusbelow = "<p class=\"text-danger centering\">An Error occured while deleting the Staff.</p>";
			}else{

				
				require 'model/logsys.php';

				$details = "Operating Staff Deleted from the System";
				logSystem($conn,$details);


				$statusbelow = "<p class=\"text-success centering\">The Staff was Successfully deleted.<br>
				This will just prevent them from using the system permanently. But their data will remain in the System</p>";
			}

		}else{
			echo "Something is wrong connecting";
			die();
		}
}
require '_inc/header.php';
require 'views/deletestaff.view.php';
require '_inc/footer.php';
?>