<?php
require 'model/dbfunctions.php';

//check priviliges for Patient
if (!isset($_SESSION['patid']) || $_SESSION['role'] != 'patient') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/datafunctions.php';
require 'model/fetch_functions.php';
$title = "Update Personal Info";


$conn = dbconnect();
if ($conn) {

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$names = htmlspecialchars($_POST['names']);
		$email = htmlspecialchars($_POST['email']);

		$data = array(
			'patid' => $_SESSION['patid'],
			'names' => $names, 
			'email' => $email
		);

		$results = updatePat($conn,$data);

		if ($results) {
			$_SESSION['names'] = $names;
			$_SESSION['email'] = $email;
			$status = "<p class= \"text-success centering\">Data Updated Successifully.</p>";

		}else{

			$status = "<p class= \"text-danger centering\">Error while updating. Check your email and try again.</p>";
		}
	}

}else{
	die('Couldnt connect to db');
}
require '_inc/header.php';
require 'views/updatepat.view.php';
require '_inc/footer.php';
?>s