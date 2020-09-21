<?php
$title = "Logout";
include '_inc/header.php';
require 'model/dbfunctions.php';
require 'model/logsys.php';
	$conn = dbconnect();

	$details = "Logout Activity";
	logSystem($conn,$details);

?>
<div class="row">
<div class="col-md-2 col-sm-2"></div>

<div class="col-md-8 col-sm-8">

	<h2 class="text-success" style="padding-left:10px;">Thank you for using the KOMIS.</h2>
	<h4 class="detail">You are now logged out  <?= $_SESSION['names']?></h4>
	<a href="./"><button class="accept-button">Back Home</button></a><br><br>
</div>

<div class="col-md-2 col-sm-2"></div>
</div>
<?php 
session_destroy();
$_SESSION[] = []; 
?>