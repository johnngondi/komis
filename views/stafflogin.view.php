<div class="row contents">
	<div class="col-md-2 col-sm-2"></div>
	<div class="col-md-8 col-sm-8 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Staff Login</h3></div>
			<div class="panel-body">
			<p id="status"><?php if (isset($status)) {echo "$status";}?></p>
				<form method="POST" action="stafflogin.php" name="loginform" role="form">
					<div class="form-group">
						<label for="idnumber">ID Number</label><br>
						<input class="text-input" type="idnumber" name="idnumber" id="idnumber" placeholder="Enter ID Number." value="<?php if (isset($data['username'])) {echo $data['username'];}?>">
					</div>
					<div class="form-group">
						<label for="password">Password</label><br>
						<input class="text-input" type="password" name="password" id="password" placeholder="Enter Password">
					</div>
					<input class="accept-button" id="submit-form" type="button" value="Login" onclick="validateLogin()">
					<div class="mytooltipreset"><input type="button" class="reset-button" id="staffreset-button" value="Reset Password" onclick="resetPass('staff')">
					<span class="tooltiptextreset">This will change your current Password</span></div><br><br>
					<input type="button" class="reset-button" value="Cancel" onclick="redirect ()"></input>
				
				</form>
			</div>
		</div>
		
	</div>
	<div class="col-md-2 col-sm-2"></div>
</div>