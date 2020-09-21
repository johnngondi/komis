<?php
require 'model/dbfunctions.php';

//check priviliges for Doctor
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}

$conn = dbconnect();

if ($conn) {
	$drugid = $_GET['drugid'];
	$patid = $_GET['id'];
	$hosid = $_GET['hosid'];
	$exid = $_GET['exid'];
	$day = date("d");
	$month = date("m");
	$year = date("Y");

	$sql = "DELETE FROM medication WHERE drugid = \"$drugid\" 
	AND idnumber = $patid AND day = $day AND month = $month AND year = $year";
	$result = deletedata($conn,$sql);

	if ($result) {

		require 'model/logsys.php';

		$details = "Drug assigned to Patient removed PatientId = $patid DrugId = $drugid";
		logSystem($conn,$details);

		header("location:diagnose.php?id=$patid&&drug=1&&hosid=&hosid&&exid=$exid");
	}

}else{
	die('Error while connecting.');
}
?>