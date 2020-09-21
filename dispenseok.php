<?php
require 'model/dbfunctions.php';

//check priviliges for Pharmacist
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'pharmacist') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}

$conn = dbconnect();

if ($conn) {

	if ($_GET['criteria'] == 1) {
		$patid = $_GET['id'];
		$drugid = $_GET['drugid'];
		$staffid = $_SESSION['staffid'];
		$day = date("d");
		$month = date("m");
		$year = date("Y");
		$time = date("h:i:s");

		$sql = "UPDATE medication SET state = 1, staffid = \"$staffid\" WHERE drugid = \"$drugid\" 
		AND day = \"$day\" AND month = \"$month\" AND year = \"$year\"";

		$result = adddata($conn,$sql);

		if ($result) {
			
				require 'model/logsys.php';

				$details = "Drug dispensed Drug id = $drugid to Patient Id = $patid";
				logSystem($conn,$details);


			header("location:dispense.php?id=$patid&&dispense=1");
		}else{
			header("location:dispense.php");
		}
	}

	if ($_GET['criteria'] == 2) {
		$drug = $_POST['medname'];
		$dose = $_POST['dose'];
		$patid = $_GET['id'];
		$olddrugid = $_POST['oldid'];

		$sql = "SELECT drugid FROM drug WHERE drugname = \"$drug\"";
		$drugid = fetchdata($conn,$sql);
		$drugid = $drugid[0];
		extract($drugid);

		$staffid = $_SESSION['staffid'];
		$day = date("d");
		$month = date("m");
		$year = date("Y");
		$time = date("h:i:s");

		$sql = "UPDATE medication SET state = 1, staffid = \"$staffid\", dose = \"$dose\", 
		drugid = \"$drugid\" WHERE drugid = \"$olddrugid\" AND day = \"$day\" AND month = \"$month\" 
		AND year = \"$year\"";

		$result = adddata($conn,$sql);

		if ($result) {
			
			require 'model/logsys.php';

			$details = "Alternative drug dispensed Drug Id = $drugid Original Drug = $olddrugid to Patient $patid";
			logSystem($conn,$details);

			header("location:dispense.php?id=$patid&&dispense=1");
		}else{

			header("location:dispense.php");
		}
	}

	

}else{
	die('Error while connecting');
}

?>