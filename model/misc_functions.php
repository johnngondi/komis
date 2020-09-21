<?php
function addDrug($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO drug (drugid,drugcat,drugname) VALUES (\"$drugid\",\"$drugcategory\",\"$drugname\")";
	$results = adddata($conn,$sql);

	if ($results) {
		return true;

	}else{
		return false;
	}

}

function addDisease($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO disease (diseaseid,diseasecat,diseasename) VALUES (\"$diseaseid\",\"$diseasecategory\",\"$diseasename\")";
	$results = adddata($conn,$sql);

	if ($results) {
		return true;

	}else{
		return false;
	}
}

function addHospital($conn,$data)
{
	extract($data);

	$sql = "INSERT INTO hospital (hosid,hosname,hoskey) VALUES (\"$hospitalid\",\"$hospitalname\",\"$hospitalkey\")";
	$results = adddata($conn,$sql);

	if ($results) {
		return true;

	}else{
		return false;
	}
}

?>