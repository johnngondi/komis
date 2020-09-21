<?php
session_start();
$title = "Restricted Access";
include '_inc/header.php';

if (isset($_SESSION['role'])) {
	$message = "You have no privilliges for it.";

}else{
	$message = "Log in first then we shall see.";

}

require 'views/restricted.view.php';
//include '_inc/footer.php';
?>
