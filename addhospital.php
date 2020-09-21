<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}

require 'model/misc_functions.php';
$title = "Add New Hospital";
$conn = dbconnect();

$key = "KOMIS-".rand(1000,9999)."-".date("si")."-".date("ym");

if ($conn) {
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$hospitalid = htmlspecialchars($_POST['id']);
		$hospitalname = htmlspecialchars($_POST['name']);
		$hospitalkey = htmlspecialchars($_POST['key']);

		$data = array(
			'hospitalid' => $hospitalid,
			'hospitalkey' => $hospitalkey,
			'hospitalname' => $hospitalname 
		);

		$result = addHospital($conn,$data);

		if ($result) {

		require 'model/logsys.php';

		$details = "Hospital added hospital id = $hospitalid";
		logSystem($conn,$details);

			$status = "<p class=\"text-success centering\">New Hospital Registered successfully.</p>";
		
		}else{
			$status = "<p class=\"text-danger centering\">Error while adding the Hospital, make sure the Hospital ID is ok then try again.</p>";
		
		}

	}

}else{
	die('Couldnt connect to database');
}

require '_inc/header.php';
require 'views/addhospital.view.php';
require '_inc/footer.php';
?>