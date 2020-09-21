<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/misc_functions.php';
$title = "New Disease";

$conn = dbconnect();

if ($conn) {
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$diseaseid = htmlspecialchars($_POST['id']);
		$diseasecategory = htmlspecialchars($_POST['category']);
		$diseasename = htmlspecialchars($_POST['name']);

		$data = array(
			'diseaseid' => $diseaseid,
			'diseasecategory' => $diseasecategory,
			'diseasename' => $diseasename 
		);

		$result = addDisease($conn,$data);

		if ($result) {

			require 'model/logsys.php';

			$details = "A New Disease registered to System Disease ID = $diseaseid";
			logSystem($conn,$details);

			$status = "<p class=\"text-success centering\">New Disease Registered successfully. It will be availbale to all hospitals.</p>";
		
		}else{
			$status = "<p class=\"text-danger centering\">Error while adding the disease, make sure the disease id is ok then try again.</p>";
		
		}

	}

}else{
	die('Couldnt connect to database');
}

require '_inc/header.php';
require 'views/newdisease.view.php';
require '_inc/footer.php';
?>