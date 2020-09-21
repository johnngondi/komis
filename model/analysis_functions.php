<?php
function getDiseases($conn,$criteria)
{
	//total diseases
	$sql2 = "SELECT count(*) FROM disease";
	$totaldiseases = getnumberofrows($conn, $sql2);
	echo "$totaldiseases";
	//get all diseases
		$sql1 = "SELECT diseaseid,diseasename,diseasecat FROM disease";
		$diseases = fetchdata($conn,$sql1);

	//use loop to get the details from prescription table
	for ($i=0; $i < $totaldiseases; $i++) { 
		$disease = $diseases[$i];
		$diseaseid = $disease['diseaseid'];
		$diseasename = $disease['diseasename'];
		$diseasecat = $disease['diseasecat'];

		//getdisease details
		$sql = "SELECT count(*) FROM prescription WHERE diseaseid=$diseaseid".$criteria;
		$cases = getnumberofrows($conn, $sql);

		$results = array(
			'diseasecat' => $diseasecat, 
			'diseasename' => $diseasename, 
			'cases' => $cases 
		);

		return $results;
	}

	
	// $sql = "SELECT d.diseasecat, d.diseasename, count(*) as cases FROM disease d, prescription p WHERE d.diseaseid = p.diseaseid".$criteria;
	// $results = fetchdata($conn,$sql);
	// echo "$sql";
	// print_r($results);
	// return $results;
}

function getDrugsUsage($conn,$criteria)
{
	
}
?>