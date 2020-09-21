<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/staff_acts_data_functions.php';
$title = "Suspend/Resume Staff";


$conn = dbconnect();

$visibility1 = "hidden";

if ($conn) {
	$staffs = getSuspendedStaff($conn);
	
	if ($staffs == !NULL) {
		$visibility = "visible";

	}else{
		$visibility = "hidden";
		$status1 = "<p class=\"text-success centering\">Horray! No Suspended Staff.</p>";
	}

	if (!empty($_GET)) {
		
			$staffid = htmlspecialchars($_GET['staffid']);
			$details = getStaffDetails($conn,$staffid);
			
			if (!$details) {
				$status = "Staff doesn't exist";

			}else{
				if ($details['state'] == 3 ) {
					$status = "<p class=\"text-danger centering\">This Staff Member was already deleted from the System. You can't Suspend them.</p>";
				
				}elseif ($details['state'] == 0) {
					$status = "<p class=\"text-danger centering\">This Staff has not been Activated yet. You can't suspend them.</p>";
								
				}elseif ($details['state'] == 2) {
					$status = "<p class=\"text-danger centering\">This Staff is already under suspension. You can't suspend them. First resume them to service below there.</p>";
					
				}else{
					$visibility1 = "visible";
					$name = $details['names'];
					$idno = $details['idnumber'];
					$email = $details['email'];
					$role = $details['role'];
					$postidno = $staffid;
	 									
				}
			}
	}


	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

				$staffid = htmlspecialchars($_POST['postidno']);
				$result = suspendStaff($conn,$staffid);

				if (!$result) {
					$statusbelow = "<p class=\"text-danger centering\">An Error occured while suspending the Staff. Contact Admin</p>";
				
				}else{

					

					require 'model/logsys.php';

					$details = "Staff Suspended from the system StaffId = $staffid";
					logSystem($conn,$details);

		

					$statusbelow = "<p class=\"text-success centering\">The Staff was Successfully Suspended.<br>
					This will just prevent them from using the system temporarily.</p>";
				}
	}

}else{
	die("Couldn't connect to database");
}
		

require '_inc/header.php';
require 'views/suspendstaff.view.php';
require '_inc/footer.php';
?>