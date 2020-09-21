<?php
require 'model/dbfunctions.php';
require 'model/datafunctions.php';

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
	$conn = dbconnect();

	if ($_GET['idnumber'] != "") {

		$uname = $_GET['idnumber'];
		$newpass ="kOmIs".rand(100,1000).date("shi");

		$data = array(
			'uname' => $uname, 
			'newpass' => $newpass
		);
		//check if reg exists
		$sql = "SELECT username FROM stafftable WHERE username = \"$uname\"";
		$exist = fetchdata($conn,$sql);

		if ($exist) {
			changepassword($conn,$data);


		require 'model/logsys.php';

		$details = "Password reset for $uname";
		logSystem($conn,$details);

			
			$email = getemail($conn,$uname);

			$mailbody = <<<EOT
			<div style="text-align:center; color:#0099cc; font-family:Times New Roman;  font-size:20px; border: solid 1px #0099cc; width:600px; padding:3px 3px 3px 3px;">
				<h2 style="color:#009900; font-family:Times New Roman; background-color:#f5f5f5; margin-top:0px; padding:3px 3px 3px 3px;;">Congratulations! <br> Your Password was successfully Changed.</h2>
				<p><a href="#"><img src="http://localhost/portal/images/logowhite.png" width="150" height="150"></a></p>
				<p>Hello. Your password reset request was Successful. Login <a href="http://localhost/portal">here</a>.</p>
				<p>Use the credentials below to login and change your Password as you prefer</p>
				<div style="text-align:left">
					<h3><b>Current Login info</b></h3>
					<p>Registration No: $uname</p>
					<p>Password: $newpass</p><br>
					<p>Kind Regard,</p>
					<p>KOMIS</p>
				</div>

				
				<p>Incase of anything, you can contact us <a href="https://www.komis.com/contact_us">Here</a> or send an email to the Customer Care <a href="mailto:customercare@komis.com">Here</a></p>
				<p style="color:#993333">This email was autogenerated. Do not reply</p>
			
				<h3 style="color:#0099cc; font-family:Times New Roman; background-color:#f5f5f5; margin-bottom:0px; padding-top:0px 0px 0px 0px;">Kenya Onlime Medical Info System<br>P.O. Box 000-00000 Nairobi Kenya.<br>
				Website: <a href="https://www.komis.com">www.komis.com</a>  Email: info@komis.com</h3>
			</div>
EOT;
					$mailsubject = "Password reset Successful.";
					$to = $email;
					$headers = "MIME-Version: 1.0" . "\r\n";
					$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
					$headers .= "no-reply@komis.com". "\r\n";
					
					echo "$to $mailsubject $headers $mailbody";
			$answer = mail($to,$mailsubject,$mailbody,$headers);;

			if ($answer) {
				echo '<script> alert("An Email has been sent containing new login info.");window.location.href=\'stafflogin.php\';</script>';

			}else{

				echo '<script> alert("Your password was reset. An Error Occured while sending the Email");window.location.href=\'stafflogin.php\';</script>';
			}
		

		}else{
			echo '<script> alert("Sorry. That ID Number does not exist in the System.");window.location.href=\'stafflogin.php\';</script>';
		}

			


		

	}else{
		echo "<script> alert(\"Enter ID Number\");</script>";

		if ($_GET['role'] == "staff") {
			header('location:stafflogin.php');
		}else{
			header('location:patlogin.php');
		}
	}
	

}else{
	header('location:index.php');
}

?>