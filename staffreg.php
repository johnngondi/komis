<?php
require 'model/dbfunctions.php';
require 'model/datafunctions.php';
require 'model/fetch_functions.php';

$title = "Staff Registration";


$conn = dbconnect();
$hospitals = getAllHospitalsName($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		

		if($conn){
			$staffid = htmlspecialchars($_POST['staffid']);
			$name = htmlspecialchars($_POST['names']);
			$gender = htmlspecialchars($_POST['gender']);
			$email = htmlspecialchars($_POST['email']);
			$role = htmlspecialchars($_POST['role']);
			$hospital = htmlspecialchars($_POST['hospital']);
			$password = htmlspecialchars($_POST['password']);
			$regdate = date("Y-m-d h:i:s");
			
			//arrays to hold the data
			$staffdata = array(
				'staffid' => $staffid,
				'name' => $name, 
				'gender' => $gender, 
				'email' => $email,
				'role' => $role,
				'hospital' => $hospital,
				'password' => $password,
				'regdate' => $regdate
				);

			$result = addStaff($conn,$staffdata);

			if ($result) {


				require 'model/logsys.php';

				$details = "New Staff Member registred in the system StaffId = $staffid Role=$role";
				logSystem($conn,$details);

		
				echo "<script>document.location.href=\"regsuccess.php?idno=$staffid&&user=staff\"</script>";

			}else{
die();
				echo "<script>document.location.href=\"error.php\"</script>";
			}
						
		}else{
			echo "<script>alert(\"Couldnt Connect to DB, Please Contact the Technician\");</script>";
			die();
		}
}

include '_inc/header.php';
require 'views/staffreg.view.php';
include '_inc/footer.php';
?>