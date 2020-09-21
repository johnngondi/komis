<?php
require 'model/dbfunctions.php';

//check priviliges for Doctor
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


$conn = dbconnect();

if ($conn) {

	$drug = $_POST['medname'];
	$dose = $_POST['dose'];
	$patid = $_GET['id'];
	$hosid = $_GET['hosid'];
	$exid = $_GET['exid'];

	$sql = "SELECT drugid FROM drug WHERE drugname = \"$drug\"";
	$drugid = fetchdata($conn,$sql);
	$drugid = $drugid[0];
	extract($drugid);

	$staffid = $_SESSION['staffid'];
	$day = date("d");
	$month = date("m");
	$year = date("Y");
	$time = date("h:i:s");

	$sql = "INSERT INTO medication (drugid,idnumber,dose,staffid,hosid,examid,day,month,year,time) VALUES 
	(\"$drugid\",\"$patid\",\"$dose\",\"$staffid\",\"$hosid\",\"$exid\",\"$day\",\"$month\",\"$year\",\"$time\")";

	$result = adddata($conn,$sql);

	if ($result) {

		require 'model/logsys.php';

		$details = "Medication activity, Drug Id = $drugid, dosage = $dose Patient = $patid";
		logSystem($conn,$details);

		header("location:diagnose.php?id=$patid&&drug=1&&hosid=$hosid&&exid=$exid");
	}else{
		header("location:diagnose.php");
	}

}else{
	die('Error while connecting');
}

?>