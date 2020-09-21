<?php
$title = "Drug Analysis";
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}




$conn = dbconnect();

if ($conn) {
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
		$month = $_POST['month'];
		$year = $_POST['year'];
		
		$message = "Cases for ".DateTime::createFromFormat('!m',$month)->format('F').", ".$year ;
		$criteria = " AND year = \"$year\" AND month = \"$month\"";
		
		//total drugs
		$sql2 = "SELECT count(*) FROM drug";
		$totaldrugs = getnumberofrows($conn, $sql2);
	
		//get all drugs
		$sql1 = "SELECT drugid,drugname,drugcat FROM drug";
		$drugs = fetchdata($conn,$sql1);

		//use loop to get the details from prescription table

	}else{
		$message = "Cases for Year ".date("Y");
		$year = date('Y');
		$criteria = " AND year = \"$year\"";
		
		//total drugs
		$sql2 = "SELECT count(*) FROM drug";
		$totaldrugs = getnumberofrows($conn, $sql2);
	
		//get all drugs
			$sql1 = "SELECT drugid,drugname,drugcat FROM drug";
			$drugs = fetchdata($conn,$sql1);

		//use loop to get the details from prescription table
		
	}
			
				require 'model/logsys.php';

				$details = "Drug analysis report generated";
				logSystem($conn,$details);


}

require '_inc/header.php';
require 'views/druganalysis.view.php';
require '_inc/footer.php';
?>