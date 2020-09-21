<?php
session_start();
if ($_SESSION['role'] == 'doctor') {
	header("location:dochome.php");

}elseif ($_SESSION['role'] == 'pharmacist') {
	header("location:pharmhome.php");

}elseif ($_SESSION['role'] == 'patient') {
	header("location:pathome.php");

}elseif ($_SESSION['role'] == 'sudo') {
	header("location:sudohome.php");

}else{
	header('location:./');

}
?>