<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/misc_functions.php';
$title = "New Drug";


$conn = dbconnect();

if ($conn) {
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$drugid = htmlspecialchars($_POST['id']);
		$drugcategory = htmlspecialchars($_POST['category']);
		$drugname = htmlspecialchars($_POST['name']);

		$data = array(
			'drugid' => $drugid,
			'drugcategory' => $drugcategory,
			'drugname' => $drugname 
		);

		$result = addDrug($conn,$data);

		if ($result) {

			require 'model/logsys.php';

			$details = "New Drug Added to System Drug ID = $drugid";
			logSystem($conn,$details);

			$status = "<p class=\"text-success centering\">New Drug Registered successfully. It will be availbale to all hospitals.</p>";
		
		}else{
			$status = "<p class=\"text-danger centering\">Error while adding the drug, make sure the drug id is ok then try again.</p>";
		
		}

	}

}else{
	die('Couldnt connect to database');
}

require '_inc/header.php';
require 'views/newdrug.view.php';
require '_inc/footer.php';
?>