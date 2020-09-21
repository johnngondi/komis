<div class="row contents">
<div class="col-md-1"></div>
	<div class="col-md-10 col-sm-12 col-xsm-12 ">
		
		<div class="panel panel-default">
			<div class="panel-heading"><h3 style="color:#009933;">Delete Staff</h3></div>
			<div class="panel-body">
        <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
				<form method="GET" action="deletestaff.php" name="checkform" role="form">
					<div class="form-group col-md-8 col-sm-9">
							<label for="staffid">Staff ID Number  </label>
							<input class="text-input" type="textfield" name="staffid" id="staffid" placeholder="Enter Staff ID Number">
					</div>
					<div class="form-group col-md-4 col-sm-3">		
                  <input class="accept-button" id="checkform" type="button" value="View Details" onclick="validateFind()">
					</div>
				</form>
			</div>
			<div  class="panel-body">

				<div class="details">
					<h4>Name: <?php if(isset($name)){echo "$name";}else{echo "Search to View...";}?></h4><br>
					
					<h4>ID Number: <?php if(isset($idno)){echo "$idno";}else{echo "Search to View...";}?></h4><br>
					
					<h4>Email: <?php if(isset($email)){echo "$email";}else{echo "Search to View...";}?></h4><br>
					
					<h4>Role: <?php if(isset($role)){echo ucwords($role);}else{echo "Search to View...";}?></h4><br>
				
				</div>
				
				<div><?php if(isset($statusbelow)){echo "$statusbelow";}?></div>
				<form method="POST" action="deletestaff.php" class="<?php if(isset($visibility)){echo "$visibility";}?>" id="deleteform" name="deleteform" role="form">
						<input class="text-input hidden" type="textfield" name="postidno" id="postidno" value="<?php if(isset($postidno)){echo "$postidno";}?>">
					<div class="form-group col-md-12 col-sm-12">
						<div class="mytooltipreset"><input class="reset-button" type="submit" value="Delete Staff"></input>
						<span class="tooltiptextreset">&#10060 This is irreversible.<br>&#10004 Click to Delete.</span></div>
					</div>	
				</form>
				<input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>
			</div>
		</div>
		
	</div>

<div class="col-md-1"></div>
</div>