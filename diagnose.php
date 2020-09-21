<?php
require 'model/dbfunctions.php';

//check priviliges for Doctor
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}

require 'model/fetch_functions.php';
$title = "Diagnose Patient";


$conn = dbconnect();

$visibility = "hidden";
$visibilitydiag = "visible";
$visibilityexamine = "hidden";
$visibilitydisease = "hidden";
$visibilitymedicine = "hidden";
$visibilitytable1 = "hidden";
$visibilitytable2 = "hidden";

if (isset($_GET['exam'])) {

	$visibility = "hidden";
	$visibilitydiag = "hidden";
	$visibilityexamine = "hidden";
	$visibilitydisease = "visible";
	$visibilitymedicine = "hidden";
	$visibilitytable1 = "hidden";
	$visibilitytable2 = "hidden";
}

if (isset($_GET['disease'])) {
	$data = array(
		'day' => date("d"), 
		'month' => date("m"), 
		'year' => date("Y"), 
		'id' => $_GET['id'],
		'examid' => $_GET['exid']
	);

	$specdiseases = getSpecificDisease($conn,$data);

	$visibility = "hidden";
	$visibilitydiag = "hidden";
	$visibilityexamine = "hidden";
	$visibilitydisease = "visible";
	$visibilitymedicine = "hidden";
	$visibilitytable1 = "visible";
	$visibilitytable2 = "hidden";	
}

if (isset($_GET['drug'])) {
	$data = array(
		'day' => date("d"), 
		'month' => date("m"), 
		'year' => date("Y"), 
		'id' => $_GET['id'],
		'hosid' => $_GET['hosid'],
		'examid' => $_GET['exid']
	);

	$specdrugs = getSpecificDrugs($conn,$data);
	
	$visibility = "hidden";
	$visibilitydiag = "hidden";
	$visibilityexamine = "hidden";
	$visibilitydisease = "hidden";
	$visibilitymedicine = "visible";
	$visibilitytable1 = "hidden";
	$visibilitytable2 = "visible";	
}

if ($conn) {
	$medicines = getAllDrugNames($conn);
	$diseases = getAllDiseaseNames($conn);
	
	if (!empty($_GET)) {
		
			$patid = htmlspecialchars($_GET['id']);
			$details = getPatientDetails($conn,$patid);
			
			if (!$details) {
				$status = "Patient doesn't exist";

			}else{
					$visibility = "visible";
					$image = $details['image'];
					$name = $details['names'];
					$idno = $details['idnumber'];
					$email = $details['email'];
	 									
			}
			
	}


}else{
	die('Couldnt connect to db');
}

require '_inc/header.php';
require 'views/diagnose.view.php';
require '_inc/footer.php';
?>