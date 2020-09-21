<?php
$title = "Update Personal Info";

require 'model/dbfunctions.php';
require 'model/datafunctions.php';
require 'model/fetch_functions.php';

$conn = dbconnect();
if ($conn) {

$staffid = $_SESSION['staffid'];

$hospitals = getAllHospitalsName($conn);

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$names = htmlspecialchars($_POST['names']);
		$email = htmlspecialchars($_POST['email']);
		$hospital = htmlspecialchars($_POST['hospital']);
		

		$data = array(
			'staffid' => $staffid,
			'names' => $names, 
			'email' => $email,
			'hospital' => $hospital
		);

		if ($hospital == 0 && $_SESSION['role'] != "sudo") {
			$results = false;
		}else{

			$results = updateStaff($conn,$data);
		}

		if ($results) {
			$_SESSION['names'] = $names;
			$_SESSION['email'] = $email;
			
			$status = "<p class= \"text-success centering\">Data Updated Successifully.</p>";

		}else{

			$status = "<p class= \"text-danger centering\">Error while updating. Check your Email or Hospital and try again.</p>";
		}
	}

}else{
	die('Couldnt connect to db');
}
require '_inc/header.php';
require 'views/updatestaff.view.php';
require '_inc/footer.php';
?>s