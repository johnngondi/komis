<?php
require 'model/dbfunctions.php';

//check priviliges for Treatment
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	if (!isset($_SESSION['patid'])) {
		
		header("location:restricted.php");
		die('No appropriate rights to access the file');
		
	}else{
		if (isset($_GET['id']) && $_SESSION['patid'] != $_GET['id']) {
			header("location:restricted.php");
			die('No appropriate rights to access the file');
		}
	}
}


require 'model/fetch_functions.php';
require 'model/cipher.php';

$title = "My Treatment History";

$conn = dbconnect();

if ($conn) {

	if (isset($_SESSION['patid'])) {
		$title = "My Treatment History";
			$patid = $_SESSION['patid'];

			$examinationhistorys = getExaminationHistory($conn,$patid);
	}

	if (isset($_GET['id'])) {
		$title = "Patient Treatment History";
		$patid = $_GET['id'];

		$examinationhistorys = getExaminationHistory($conn,$patid);



		require 'model/logsys.php';

		$details = "Treatment History for $patid accessed";
		logSystem($conn,$details);

		

	}
}

require '_inc/header.php';
require 'views/treatmenthistory.view.php';
require '_inc/footer.php';	
?>