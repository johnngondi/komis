<?php
function getActivationDetails($conn)
{
	$sql = "SELECT image,idnumber,names,email,hosid,role FROM stafftable WHERE state = 0";
	$results = fetchdata($conn,$sql);

	if ($results) {

		return $results;
	}else{

		return false;
	}
}

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

function suspendStaff($conn,$staffid)
{
	$sql = "UPDATE stafftable SET state = \"2\" WHERE idnumber = \"$staffid\"";
	$results = adddata($conn,$sql);

	if ($results) {

		return true;
	}else{

		return false;
	}
}

function getSuspendedStaff($conn)
{
	$sql = "SELECT * FROM stafftable WHERE state = 2";
	$results = fetchdata($conn,$sql);

	if ($results) {

		return $results;
	}else{

		return false;
	}
}

function resumeStaff($conn,$staffid)
{
	$sql = "UPDATE stafftable SET state = \"1\" WHERE idnumber = \"$staffid\"";
	$results = adddata($conn,$sql);

	if ($results) {

		return true;
	}else{

		return false;
	}
}

function deleteStaff($conn,$staffid)
{
	$sql = "UPDATE stafftable SET state = \"3\" WHERE idnumber = \"$staffid\"";
	$results = adddata($conn,$sql);

	if ($results) {

		return true;
	}else{

		return false;
	}
}


function activateStaff($conn,$staffid)
{
	$sql = "UPDATE stafftable SET state = 1 WHERE idnumber = \"$staffid\"";
	$results  = adddata($conn,$sql);

	if ($results) {

		return true;
	}else{

		return false;
	}
}

function seeInactive($conn,$state)
{
	try {
		$sql = "SELECT count(*) FROM stafftable WHERE state = \"$state\"";
		$numberofrows = getnumberofrows($conn, $sql);
		
		return $numberofrows;
	} catch (PDOException $e) {
		return fasle;
	}
}
?>