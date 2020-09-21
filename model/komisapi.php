<?php

function dbconnect(){

	try {
		//connection string
		$conn = new PDO('mysql:host=localhost;dbname=komisdb','Johnte','john0715823592');
		//error attribute mode
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

		return $conn;

	} catch (Exception $e) {
		echo $e->getMessage();
		return false;
	}
}


function fetchdata($conn,$sql)
{
	try {
		//Creta e the query to be executed
		$stmt = $conn->prepare($sql);
		//Execute the query
		$stmt->execute();
		//Fetch all cojntents
		$results = $stmt->fetchAll();

		if ($results) {
			return $results;

		}else {
			
			return false;
		}

	} catch (PDOException $e) {
		
		echo $e->getMessage();
		return false;
	} 
}

function getHosAPIKey($conn,$hosid)
{
	$sql = "SELECT hoskey FROM hospital WHERE hosid = \"$hosid\"";
	$hoskey = fetchdata($conn,$sql);
	$hoskey = $hoskey[0];
	extract($hoskey);

	if ($hoskey) {

		return $hoskey;
	}else{

		return false;
	}
}

function getRemotePatientMedication($conn,$patid,$date,$hosid)
{
	extract($date);
	//Fetch Patient details
	$sql1 = "SELECT names,email FROM pattable WHERE idnumber = \"$patid\"";
	$patdetails = fetchdata($conn,$sql1);

	if($patdetails){
		$sql = "SELECT m.drugid, m.dose, d.drugname FROM medication m, drug d 
		WHERE m.idnumber = \"$patid\" AND d.drugid = m.drugid AND m.state = 1
		AND m.day = \"$day\" AND m.hosid = \"$hosid\" AND m.month = \"$month\" AND m.year = \"$year\"";
		$results = fetchdata($conn,$sql);

		if ($results) {
			$patMedData = array(
				'patientDetails' => $patdetails, 
				'medicationDetails' => $results
			);

			return $patMedData;

		}else{
			return false;
		}

	}else{
		return false;
	}

	
}

function retrieve_medication($patid,$date,$apikey,$hosid)
{
	$conn = dbconnect();
	$hosapikey = getHosAPIKey($conn,$hosid);
	
	
	if ($hosapikey != "") {

		if ($apikey == $hosapikey) {
			$medication = getRemotePatientMedication($conn,$patid,$date,$hosid);

			if ($medication) {
				return $medication;
			}else{
				$errorcode = 2;//No Medication Available
				return $errorcode;
			}

		}else{

			$errorcode = 1;//Wrong API Key
			return $errorcode;
		}

	}else{

		$errorcode = 0;//Hospital Not registered
		return $errorcode;
	}
	
}

?>