<?php
require 'model/dbfunctions.php';
require 'model/datafunctions.php';
$title = "Patient Registration";


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$conn = dbconnect();

		if($conn){
			$idno = htmlspecialchars($_POST['idnumber']);
			$name = htmlspecialchars($_POST['names']);
			$gender = htmlspecialchars($_POST['gender']);
			$email = htmlspecialchars($_POST['email']);
			$password = htmlspecialchars($_POST['password']);
			$regdate = date("Y-m-d  h:i:s");
			

			
			//arrays to hold the data
			$patdata = array(
				'idno' => $idno, 
				'names' => $name, 
				'gender' => $gender, 
				'email' => $email,
				'regdate' => $regdate,
				'password' => $password
				);
			
			$result = addPatient($conn,$patdata);

			if ($result) {

				require 'model/logsys.php';

				$details = "New Patient Registred to the System Patient Id = $idno";
				logSystem($conn,$details);

				echo "<script>document.location.href=\"regsuccess.php?idno=$idno&&user=pat\"</script>";

			}else{

				echo "<script>document.location.href=\"error.php\"</script>";
			}

		}else{
			echo "<script>alert(\"Couldnt Connect to DB, Please Contact the Technician\");</script>";
			die();
		}
}

include '_inc/header.php';
require 'views/patreg.view.php';
include '_inc/footer.php';
?>