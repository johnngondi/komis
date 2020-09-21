<?php
require 'model/dbfunctions.php';

//check priviliges for Pharmacist
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'pharmacist') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/fetch_functions.php';
$title = "Dispense Medicine";


$conn = dbconnect();
$visibilitymedicine = "hidden";
$visibility = "hidden";
$visibilityalt = "hidden";

if ($conn) {
	$medicines = getAllDrugNames($conn);

	if (isset($_GET['dispense'])) {
		$visibilitymedicine = "visibility";
		$visibilityalt = "hidden";
		
	}
	
	if (!empty($_GET)) {
		
			$patid = htmlspecialchars($_GET['id']);
			$details = getPatientDetails($conn,$patid);
			
			if (!$details) {
				$status = "Patient doesn't exist";

			}else{
					$staffid = $_SESSION['staffid'];
					$sql1 = "SELECT h.hosid FROM hospital h, stafftable s WHERE h.hosid = s.hosid AND s.idnumber = \"$staffid\"";
					$hosid = fetchdata($conn,$sql1);

					$hosid = $hosid[0];
					$hosid = $hosid['hosid'];

					$visibility = "visible";
					$image = $details['image'];
					$name = $details['names'];
					$idno = $details['idnumber'];
					$email = $details['email'];

					$data = array(
						'id' => $patid, 
						'day' => date("d"),
						'month' => date("m"),
						'year' => date("Y"),
						'hosid' => $hosid
					);
	 			
					$specdrugs = getSpecificDrugsForTheDay($conn,$data);						
			}
			
	}
}else{
	die('Error while connecting.');
}

require '_inc/header.php';
require 'views/dispense.view.php';
require '_inc/footer.php';
?>