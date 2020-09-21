<?php
$title = "Disease Analysis";
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
		
		//total diseases
		$sql2 = "SELECT count(*) FROM disease";
		$totaldiseases = getnumberofrows($conn, $sql2);
	
		//get all diseases
		$sql1 = "SELECT diseaseid,diseasename,diseasecat FROM disease";
		$diseases = fetchdata($conn,$sql1);

		//use loop to get the details from prescription table

	}else{
		$message = "Cases for Year ".date("Y");
		$year = date('Y');
		$criteria = " AND year = \"$year\"";
		
		//total diseases
		$sql2 = "SELECT count(*) FROM disease";
		$totaldiseases = getnumberofrows($conn, $sql2);
	
		//get all diseases
			$sql1 = "SELECT diseaseid,diseasename,diseasecat FROM disease";
			$diseases = fetchdata($conn,$sql1);

		//use loop to get the details from prescription table
		
	}
			
				require 'model/logsys.php';

				$details = "Disease analysis report generated";
				logSystem($conn,$details);


}

require '_inc/header.php';
require 'views/diseaseanalysis.view.php';
require '_inc/footer.php';
?>