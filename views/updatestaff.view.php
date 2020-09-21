<div class="row contents">
<div class="col-md-1 col-sm-1"></div>
	<div class="col-md-10 col-sm-10 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Update Personal Details</h3></div>
			<div class="panel-body">
				<?php if (isset($status)) {echo "$status";} ?>
			
				<form method="POST" action="updatestaff.php" name="updateform" role="form">
										
					<div class="form-group col-md-4 col-sm-6">
						<label for="names">Names</label><br>
						<input class="text-input" type="textfield" name="names" id="names" placeholder="Enter Names" value="<?=$_SESSION['names']?>">
					</div>

					<div class="form-group col-md-4 col-sm-6">
						<label for="email">Email</label><br>
						<input class="text-input" type="email" name="email" id="email" placeholder="Enter Email" value="<?=$_SESSION['email']?>">
					</div>

					<div class="form-group col-md-4 col-sm-12">
							<label for="hospital">Hospital</label><br>
							<select class="text-input" name="hospital" id="hospital">
									<option value="">-select-</option>
								<?php foreach ($hospitals as $hospital) : ?>
			                  		<option value="<?= $hospital['hosid'] ?>"><?= ucwords($hospital['hosname']) ?></option>"                               
			                 	<?php endforeach; ?>
							</select>
					</div>

						<div class="panel-body">
								<div class="form-group col-md-12 col-sm-12">
								<p id="status"></p>							
									<input class="accept-button" id="submit-form" type="button" value="Update" onclick="validateUpdate('staff')"><br class="hidden-md hidden-lg hidden-sm visible-xs"><br class="hidden-md hidden-lg hidden-sm visible-xs">
									<input type="button" class="reset-button" value="Cancel" onclick="redirect ()"></input>
								</div>
								
						</div>
				</form>
			</div>
		</div>
		
	</div>
	
<div class="col-md-1 col-sm-1"></div>
</div>
<p style="margin-bottom:80px;padding-bottom:0px;"></p>