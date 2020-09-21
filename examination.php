<?php

require 'model/dbfunctions.php';

//check priviliges for Doctor
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/cipher.php';

$conn = dbconnect();

if ($conn) {
	
	$patid = $_GET['id'];
	$examinationok = strtolower($_POST['examination']);
	$examination = encrypttext($examinationok);
	$staffid = $_SESSION['staffid'];
	$day = date("d");
	$month = date("m");
	$year = date("Y");
	$time = date("h:i:s");

	$sql1 = "SELECT h.hosid FROM hospital h, stafftable s WHERE h.hosid = s.hosid AND s.idnumber = \"$staffid\"";
	$hosid = fetchdata($conn,$sql1);

	$hosid = $hosid[0];
	$hosid = $hosid['hosid'];

	$sql = "INSERT INTO examination (examination,idnumber,staffid,hosid,day,month,year,time) VALUES 
	(\"$examination\",\"$patid\",\"$staffid\",\"$hosid\",\"$day\",\"$month\",\"$year\",\"$time\")";

	$result = adddata($conn,$sql);



	if ($result) {

		require 'model/logsys.php';

		$details = "Patient dignosed Patient Id= $patid";
		logSystem($conn,$details);

		$sql2 = "SELECT examid FROM examination WHERE examination = \"$examination\"";
		$exid = fetchdata($conn,$sql2);

		$exid = $exid[0];
		$exid = $exid['examid'];

		
		header("location:diagnose.php?id=$patid&&exam=1&&hosid=$hosid&&exid=$exid");
	}else{
		header("location:diagnose.php");
	}


}else{

	die('Error while connecting.');
}
?>