<?php
require 'model/dbfunctions.php';

//check priviliges for Doctor
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}



$conn = dbconnect();

if ($conn) {

	$disease = $_POST['disease'];
	$patid = $_GET['id'];
	$hosid = $_GET['hosid'];
	$exid = $_GET['exid'];

	$sql = "SELECT diseaseid FROM disease WHERE diseasename = \"$disease\"";
	$diseaseid = fetchdata($conn,$sql);
	$diseaseid = $diseaseid[0];
	extract($diseaseid);

	$diseaseid = ($diseaseid);

	$staffid = $_SESSION['staffid'];
	$day = date("d");
	$month = date("m");
	$year = date("Y");
	$time = date("h:i:s");

	$sql = "INSERT INTO prescription (idnumber,diseaseid,staffid,examid,day,month,year,time) VALUES 
	(\"$patid\",\"$diseaseid\",\"$staffid\",\"$exid\",\"$day\",\"$month\",\"$year\",\"$time\")";

	$result = adddata($conn,$sql);

	if ($result) {

		require 'model/logsys.php';

		$details = "Disease assigned to Patient PatientId = $patid Disease = $diseaseid";
		logSystem($conn,$details);

		header("location:diagnose.php?id=$patid&&disease=1&&hosid=$hosid&&exid=$exid");
	}else{
		header("location:diagnose.php");
	}

}else{
	die('Error while connecting');
}

?>