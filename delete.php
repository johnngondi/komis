<?php
	require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


	$conn = dbconnect();

	$staffid = $_GET['staffid'];

	$sql = "DELETE FROM stafftable WHERE idnumber = \"$staffid\"";
	deletedata($conn,$sql);


		require 'model/logsys.php';

		$details = "Unverified staff deleted";
		logSystem($conn,$details);


	header("location:validatestaff.php");
?>