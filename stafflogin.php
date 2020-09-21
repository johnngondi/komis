<?php
require 'model/dbfunctions.php';
require 'model/fetch_functions.php';
require 'model/logsys.php';

 $title = "Staff Login";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$conn = dbconnect();

	if ($conn) {		
			$username = $_POST['idnumber'];
			$password = $_POST['password'];

		$logindetails = getStaffDetails($conn,$username);

		if ($logindetails) {
			//Check if they are activated or cleared or suspended.
			if ($logindetails['state'] == 1) {

				if ($logindetails['password'] == $password) {
					$_SESSION['staffid'] = $logindetails['idnumber'];
					$_SESSION['names'] = $logindetails['names'];
					$_SESSION['email'] = $logindetails['email'];
					$_SESSION['dpic'] = $logindetails['image'];
					$_SESSION['role'] = $logindetails['role'];

					$details = "Staff Login Activity";
					logSystem($conn,$details);

					if ($_SESSION['role'] == "doctor") {
						header("location:dochome.php");

					}elseif ($_SESSION['role'] == "pharmacist") {					
						header("location:pharmhome.php");

					}elseif ($_SESSION['role'] == "sudo") {
						header("location:sudohome.php");

					}else{
						$status = "Sorry. This is not your login section. Contact Admin for more info.";
					}

				}else{

					$status = "Sorry! Wrong Password.";
				}

			}elseif ($logindetails['state'] == 0) {
				$status = "Sorry! Your account exists but it is not activated yet. Contact the admin to get it activated.";
			
			}elseif ($logindetails['state'] == 2) {
				$status = "Sorry! Your account exists but it is deactivated temporarily. Contact the admin for reactivation.";
			
			}elseif ($logindetails['state'] == 3) {
				$status = "Sorry! You were banned permanently from accessing the System. Contact admin for more info.";
			}
					
		}else{
			$status = "Sorry! That ID Number is not Registred in the System.";
		}

	}else{
		die('Error while connecting.');
		
	}
}

include '_inc/header.php';
require 'views/stafflogin.view.php';
include '_inc/footer.php';