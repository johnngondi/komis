<?php
require 'model/dbfunctions.php';
//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


require 'model/staff_acts_data_functions.php';
$title = "Home";


$conn = dbconnect();

if ($conn) {

	$idnumber = $_SESSION['staffid'];
	$name = $_SESSION['names'];
	$email = $_SESSION['email'];
	$dpic = $_SESSION['dpic'];


	$inactivestaff = seeInactive($conn,0);
	$suspendedstaff = seeInactive($conn,3);

	if (strlen($inactivestaff) == 1) {
		$inactivestaff = "0".$inactivestaff;
	}

	if ($inactivestaff == 0) {
		$hide = "hidden";
	}else{
		$hide = "visible";
	}

}else{
	die('Error while connecting');
}


include '_inc/header.php';
require 'views/sudohome.view.php';
include '_inc/footer.php';
?>