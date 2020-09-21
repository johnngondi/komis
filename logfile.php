<?php
require 'model/dbfunctions.php';

//check priviliges for sudo
if (!isset($_SESSION['staffid']) || $_SESSION['role'] != 'sudo') {
	header("location:restricted.php");
	die('No appropriate rights to access the file');
}


$title = "System Log";
require '_inc/header.php';
require 'model/logsys.php';

$conn = dbconnect();

if ($conn) {

		$details = "Log File Accessed";
		logSystem($conn,$details);

	$logs = getSystemLog($conn);
}
?>
<div class="row contents">
<div class="col-md-1"></div>
  	<div class="col-md-10 col-sm-12 col-xsm-12 ">
    
	    <div class="panel panel-default">
	        <div class="panel-heading"><h3 style="color:#009933;">System Log</h3></div>
	        <div class="panel-body" style="color:#009933; text-align:left; font-size:17px;">
				<?php foreach ($logs as $log):?>

					<p style="background-color:#EEF1EE; padding:3px;">
						<?php
							echo "<b>".$log['details']."</b> on <b>".$log['datetime']."</b> by <b>".$log['user']."</b> using <b>".$log['ipaddress']."</b>";
						?>
					</p>

				<?php endforeach; ?>

	        </div>

	        <input type="button" class="reset-button" value="Back" onclick="redirect ()"></input><br>
								
		</div>
	</div>
<div class="col-md-1"></div>
</div>
<?php
require '_inc/footer.php';
?>