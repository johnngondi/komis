<div class="row contents">
<div class="col-md-1 col-sm-1"></div>
	<div class="col-md-10 col-sm-10 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Patient Registration</h3></div>
			<div class="panel-body">
			
				<form method="POST" action="patreg.php" name="regform" role="form">
					<div class="form-group col-md-4 col-sm-6">
						<label for="idnumber">ID Number</label><br>
						<input class="text-input" type="number" name="idnumber" id="idnumber" placeholder="Enter ID Number">
					</div>
					
					<div class="form-group col-md-4 col-sm-6">
						<label for="names">Names</label><br>
						<input class="text-input" type="textfield" name="names" id="names" placeholder="Enter Names">
					</div>

					<div class="form-group col-md-4 col-sm-6">
							<label for="gender">Select Gender</label><br>
							<select class="text-input" name="gender" id="gender">
								<option value="">-select-</option>
								<option value="male">Male</option>
								<option value="female">Female</option>
							</select>
					</div>

					<div class="form-group col-md-4 col-sm-6">
						<label for="email">Email</label><br>
						<input class="text-input" type="email" name="email" id="email" placeholder="Enter Email">
					</div>

					<div class="form-group col-md-4 col-sm-6">
						<label for="password">New Password</label><br>
						<div class="mytooltipinput"><input class="text-input" type="password" name="password" id="password" placeholder="Enter New Password.">
						<span class="tooltiptextinput">&#10004 Must be more than 8 characters.<br>&#10004 Combine Letters and Numbers</span></div>
					</div>

					<div class="form-group col-md-4 col-sm-6">
						<label for="confirm">Confirm Password</label><br>
						<div class="mytooltipinput"><input class="text-input" type="password" name="confirm" id="confirm" placeholder="Re-Enter Password">
						<span class="tooltiptextinput">&#10004 Must be more than 8 characters.<br>&#10004 Must be equal to Password.</span></div>
					</div>

						<div class="panel-body">
								<div class="form-group col-md-12 col-sm-12">
									<label style="font-size:25px;" for = "terms" id="term" ><input type="checkbox" id="terms" name="terms"  value="agree" > I have read and I accept the <a href="javascript:newTab('terms.php#pat')">Terms and Conditions</a></label> 
								</div>
								<div class="form-group col-md-12 col-sm-12">
								<p id="status"></p>							
									<input class="accept-button" id="submit-form" type="button" value="Register" onclick="validateRegister('patient')"><br class="hidden-md hidden-lg hidden-sm visible-xs"><br class="hidden-md hidden-lg hidden-sm visible-xs">
									<input type="button" class="reset-button" value="Cancel" onclick="redirect ()"></input>
								</div>
								
						</div>
				</form>
			</div>
		</div>
		
	</div>
	
<div class="col-md-1 col-sm-1"></div>
</div>