<?php

function addPatient($conn,$data)
{
	extract($data);
	$sql = "INSERT INTO pattable (idnumber,names,email,gender,password,regdate) VALUES (\"$idno\",\"$names\",\"$email\",\"$gender\",\"$password\",\"$regdate\")";
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		return false;
	}
}

function addImage($conn,$filename,$idno,$table)
{
	$sql = "UPDATE $table SET image = \"$filename\" WHERE idnumber = \"$idno\"";
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		return false;
	}
}

function addStaff($conn,$data)
{
	extract($data);
	$sql = "INSERT INTO stafftable (idnumber,names,email,gender,role,hosid,password,regdate) 
	VALUES (\"$staffid\",\"$name\",\"$email\",\"$gender\",\"$role\",\"$hospital\",\"$password\",\"$regdate\")";
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		echo "Error";
		return false;
	}
}

function updateStaff($conn,$data)
{
	extract($data);
	$sql = "UPDATE stafftable SET names = \"$names\", email = \"$email\", hosid = \"$hospital\" WHERE idnumber = \"$staffid\"";
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		return false;
	}
}

function updatePat($conn,$data)
{
	extract($data);
	$sql = "UPDATE pattable SET names = \"$names\", email = \"$email\" WHERE idnumber = \"$patid\"";
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		return false;
	}
}

function validatePassword($conn,$data)
{
	extract($data);
	if (isset($_SESSION['patid'])) {
		$sql = "SELECT password FROM pattable WHERE idnumber = \"$idno\"";

	}elseif (isset($_SESSION['staffid'])) {
		$sql = "SELECT password FROM stafftable WHERE idnumber = \"$idno\"";

	}

	$result = fetchdata($conn,$sql);

	if ($result) {
		$result = $result[0];
		$pass = $result['password'];

		if ($pass == $oldpass) {
			
			return true;
		}else{

			return false;
		}

	}else{

		return false;
	}
}

function changePassword($conn,$data)
{
	extract($data);

	if (isset($_SESSION['patid'])) {
		$sql = "UPDATE pattable SET password = \"$newpass\" WHERE idnumber = \"$idno\"";

	}elseif (isset($_SESSION['staffid'])) {
		$sql = "UPDATE stafftable SET password = \"$newpass\" WHERE idnumber = \"$idno\"";
		
	}
	
	$result = adddata($conn,$sql);

	if ($result) {

		return true;
	}else{

		return false;
	}	
}

?>