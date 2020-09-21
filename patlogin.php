<?php
 $title = "Patient Login";
 
require 'model/dbfunctions.php';
require 'model/fetch_functions.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = dbconnect();

	if ($conn) {
			
			$username = $_POST['idnumber'];
			$password = $_POST['password'];
		

		$logindetails = getPatientDetails($conn,$username);

		if ($logindetails) {
			if ($logindetails['password'] == $password) {
				$_SESSION['patid'] = $logindetails['idnumber'];
				$_SESSION['names'] = $logindetails['names'];
				$_SESSION['email'] = $logindetails['email'];
				$_SESSION['dpic'] = $logindetails['image'];
				$_SESSION['role'] = 'patient';

				header("location:pathome.php");
			}else{
				$status = "Sorry! Wrong Password";
			}
			
		}else{
			$status = "Sorry! That ID Number is not Registred in the System.";
		}

		
	}else{
		die('Error while connecting.');

	}
}

include '_inc/header.php';
require 'views/patlogin.view.php';
include '_inc/footer.php';