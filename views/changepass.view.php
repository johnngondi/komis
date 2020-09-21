<div class="row contents">
<div class="col-md-2 col-sm-1"></div>
	<div class="col-md-8 col-sm-10 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Change Password</h3></div>
			<div class="panel-body">
			<?php if (isset($status)) {echo "$status";} ?>
        	<p id="status"></p>
				<form method="POST" action="changepass.php" name="changepassform" role="form">
					<div class="form-group col-md-12 col-sm-12">
						<label for="uname">Old Password</label><br>
						<input class="text-input" type="password" name="oldpass" id="oldpass" placeholder="Enter Old Password">
					</div>

					<div class="form-group col-md-6 col-sm-6">
						<label for="password">New Password</label><br>
						<div class="mytooltipinput"><input class="text-input" type="password" name="password" id="password" placeholder="Enter New Password.">
						<span class="tooltiptextinput">&#10004 Must be more than 8 characters.<br>&#10004 Combine Letters and Nubers</span></div>
					</div>

					<div class="form-group col-md-6 col-sm-6">
						<label for="confirm">Confirm Password</label><br>
						<div class="mytooltipinput"><input class="text-input" type="password" name="confirm" id="confirm" placeholder="Re-Enter Password">
						<span class="tooltiptextinput">&#10004 Must be more than 8 characters.<br>&#10004 Must be equal to Password.</span></div>
					</div>

					
					<div class="form-group col-md-12 col-sm-12">
                  		<input class="accept-button" id="submit-form" type="button" value="Change Pass" onclick="validateChangePass()"><br class="hidden-sm hidden-md hidden-lg"><br class="hidden-sm hidden-md hidden-lg">
						<input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>
					</div>	
				</form>

			</div>
		</div>
		
	</div>

<div class="col-md-2 col-sm-1"></div>
</div>