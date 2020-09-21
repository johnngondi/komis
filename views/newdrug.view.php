<div class="row contents">
<div class="col-md-1 col-sm-1"></div>
	<div class="col-md-10 col-sm-10 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Add New Drug</h3></div>
			<div class="panel-body">
				<div><?php if (isset($status)) {echo $status;}?></div>
				<form method="POST" action="newdrug.php" name="addnewform" role="form">
					
					<div class="form-group col-md-4 col-sm-6">
						<label for="id">Drug ID</label><br>
						<input class="text-input" type="textfield" name="id" id="id" placeholder="Enter Drug Id">
					</div>

					<div class="form-group col-md-4 col-sm-6">
						<label for="category">Drug Category</label><br>
						<input class="text-input" type="textfield" name="category" id="category" placeholder="Enter Drug Category">
					</div>
					
					<div class="form-group col-md-4 col-sm-12">
						<label for="name">Drug Name</label><br>
						<input class="text-input" type="textfield" name="name" id="name" placeholder="Enter Drug Names">
					</div>

						<div class="panel-body">
								<div class="form-group col-md-12 col-sm-12">
								<p id="status"></p>							
									<input class="accept-button" id="submit-form" type="button" value="Save" onclick="validateDrugDisease()"><br class="hidden-md hidden-lg hidden-sm visible-xs"><br class="hidden-md hidden-lg hidden-sm visible-xs">
									<input type="button" class="reset-button" value="Cancel" onclick="redirect ()"></input>
								</div>
								
						</div>
				</form>
			</div>
		</div>
		<br><br><br>
	</div>
	
<div class="col-md-1 col-sm-1"></div>
</div>