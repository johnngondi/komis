<?php

function getIp()
{
	$ipaddress = '';
	if (getenv('HTTP_CLIENT_IP'))
		$ipaddress = getenv('HTTP_CLIENT_IP');
	else if(getenv('HTTP_X_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_X_FORWARDED_FOR');
	else if(getenv('HTTP_X_FORWARDED'))
		$ipaddress = getenv('HTTP_X_FORWARDED');
	else if(getenv('HTTP_FORWARDED_FOR'))
		$ipaddress = getenv('HTTP_FORWARDED_FOR');
	else if(getenv('HTTP_FORWARDED'))
		$ipaddress = getenv('HTTP_FORWARDED');
	else if(getenv('REMOTE_ADDR'))
		$ipaddress = '127.0.0.1';
	else
		$ipaddress = 'UNKNOWN';

	return $ipaddress;
}

function logSystem($conn,$details)
{
	if ($_SESSION['role'] == "patient") {
		$user = $_SESSION['patid']." - ".$_SESSION['names']." - ".$_SESSION['role'];
	}else{
		$user = $_SESSION['staffid']." - ".$_SESSION['names']." - ".$_SESSION['role'];
	}
	
	$datetime = date("Y-m-d h:i:s");
	$ipaddress = getIp();
	$sql = "INSERT INTO logfile (details,user,datetime,ipaddress) VALUES 
	(\"$details\",\"$user\",\"$datetime\",\"$ipaddress\")";
	$results = adddata($conn,$sql);

	if ($results) {
		return true;
	}else{
		return false;
	}
}

function getSystemLog($conn)
{
	try {
		$sql = "SELECT * FROM logfile";
		$results = fetchdata($conn,$sql);
		if ($results) {
			extract($results);
				
			return $results;
		}else{
			return false;
		}
	} catch (Exception $e) {
		return false;
	}
}
?>