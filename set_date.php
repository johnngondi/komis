<?php
// $title = "Disease Analysis";
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'doctor') {
	
	die('No appropriate rights to access the file');
}

$conn = dbconnect();

if ($conn) {
	$pat = $_POST['pat'];
	$date = $_POST['date'];

	$sql = "UPDATE pattable SET next_visit=\"$date\" WHERE idnumber = \"$pat\"";
	$results = addData($conn,$sql);

	if ($results) {
		echo "<script>
			$('#set-date').html('Success! Date Set');
			// $('#set-date').addClass('disabled');

			$('#done').removeClass('hidden');
		</script>";
	} else {
		echo "<script>
			alert('Error while setting date.');
		</script>";
	}

} else {
	die('Couldnt connect to db');
}

?>