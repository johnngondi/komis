<?php

function getStaffDetails($conn,$staffid)
{
	$sql = "SELECT * FROM stafftable WHERE idnumber = \"$staffid\"";
	$results = fetchdata($conn,$sql);

	if ($results) {
		$results = $results[0];

		return $results;
	}else{

		return false;
	}
}

function getPatientDetails($conn,$idnumber)
{
	$sql = "SELECT * FROM pattable WHERE idnumber = \"$idnumber\"";
	$results = fetchdata($conn,$sql);

	if ($results) {
		$results = $results[0];

		return $results;
	}else{

		return false;
	}
}

function getAllDrugNames($conn)
{
	$sql = "SELECT drugname FROM drug ORDER BY drugname ASC";
	$results = fetchdata($conn,$sql);

	if ($results) {
		return $results;

	}else{
		return false;
	}
}

function getAllDiseaseNames($conn)
{
	$sql = "SELECT diseasename FROM disease ORDER BY diseasename ASC";
	$results = fetchdata($conn,$sql);

	if ($results) {
		return $results;
		
	}else{
		return false;
	}
}

function getAllHospitalsName($conn)
{
	$sql = "SELECT hosid,hosname FROM hospital ORDER BY hosname ASC";
	$results = fetchdata($conn,$sql);

	if ($results) {
		return $results;

	}else{
		return false;
	}
}

function getSpecificDisease($conn,$data)
{
	extract($data);

	$sql = "SELECT d.diseaseid,d.diseasecat,d.diseasename FROM disease d, prescription p 
	WHERE d.diseaseid = p.diseaseid AND p.day = $day AND p.month = $month AND p.year = $year AND p.idnumber = \"$id\"  AND p.examid = \"$examid\"";
	$results = fetchdata($conn,$sql);
	
	if ($results) {

		return $results;
	}else{

		return false;
	}

}

function getSpecificDrugs($conn,$data)
{
	extract($data);

	$sql = "SELECT q.drugid,q.drugcat,q.drugname,m.dose FROM drug q, medication m 
	WHERE q.drugid = m.drugid AND m.day = $day AND m.month = $month AND m.year = $year 
	AND m.idnumber = \"$id\" AND m.hosid = $hosid AND m.examid = \"$examid\" AND m.state=0";
	$results = fetchdata($conn,$sql);
	
	if ($results) {

		return $results;
	}else{
		
		return false;
	}

}

function getSpecificDrugsForTheDay($conn,$data)
{
	extract($data);

	$sql = "SELECT q.drugid,q.drugcat,q.drugname,m.dose FROM drug q, medication m 
	WHERE q.drugid = m.drugid AND m.day = $day AND m.month = $month AND m.year = $year 
	AND m.idnumber = \"$id\" AND m.hosid = $hosid AND m.state=0";
	$results = fetchdata($conn,$sql);
	
	if ($results) {

		return $results;
	}else{
		
		return false;
	}

}

function getExaminationHistory($conn,$patid)
{
	$sql = "SELECT s.names, e.examid, e.examination,h.hosname,e.day,e.month,e.year,e.time FROM stafftable s, examination e, hospital h WHERE e.idnumber = $patid AND h.hosid = e.hosid AND e.staffid = s.idnumber";
	$results = fetchdata($conn,$sql);

	if ($results) {

		return $results;
	}else{
		return false;
	}
}

function getDiseasesHistory($conn,$data)
{
	extract($data);
	$sql = "SELECT d.diseasename FROM disease d,prescription p WHERE d.diseaseid = p.diseaseid 
	AND p.day = $day AND p.examid = \"$examid\" AND p.month = $month AND p.year = $year";
	$results = fetchdata($conn,$sql);

	if ($results) {

		return $results;
	}else{
		return false;
	}
}


function getDrugsHistory($conn,$data)
{

	extract($data);
	$sql = "SELECT d.drugname, s.names, m.state FROM drug d,medication m,stafftable s WHERE d.drugid = m.drugid 
	AND m.day = $day AND  m.examid = $examid AND m.month = $month AND m.year = $year AND m.idnumber = \"$patid\" AND s.idnumber = m.staffid";
	$results = fetchdata($conn,$sql);

	if ($results) {

		return $results;
	}else{
		
		return false;
	}
}


?>