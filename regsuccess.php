<?php

$title = "Registration Successful";
if (isset($_GET['user'])) {
	$user = $_GET['user'];
}else{
	$user = "";
}

		if (isset($_GET['errocode'])) {
			$errocode = $_GET['errocode'];
			if ($errocode == 0) {
				$message = "<p class=\"text-danger centering\">Error while Uploading Image</p>";

			}elseif ($errocode == 5) {
				$message = "<p class=\"text-success centering\">The Profile Picture was successifully set.</p>";				
			
			}elseif ($errocode == 1) {
				$message = "<p class=\"text-danger centering\">The file you are uploading is not an image.</p>";
			
			}elseif ($errocode == 2) {
				$message = "<p class=\"text-danger centering\">That image already exists. Change the filename of the Image and upload again.</p>";
			
			}elseif ($errocode == 3) {
				$message = "<p class=\"text-danger centering\">The image you are uploading is so big in size. Should be 500KB and below.</p>";
			
			}elseif ($errocode == 4) {
				$message = "<p class=\"text-danger centering\">The image format is not allowed. Use <b>.jpeg .jpg .png or .gif</b> filetype only</p>";
			}
		}
		
require '_inc/header.php';
require 'views/regsuccess.view.php';
require '_inc/footer.php';
?>