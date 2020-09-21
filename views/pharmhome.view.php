<div class="row">
<div class="col-md-1"></div>
	<div class="col-md-10">
		

			<div class="panel panel-default">
				<div class="panel-heading" style="text-align:center;color:#009933;font-size:30px;">Welcome <?= ucwords($name) ?><br><br><a href="changepass.php">Change Password <span style="font-size:20px;" class="glyphicon glyphicon-lock"></span> </a> <br class="">  <a href="logout.php">Log out <span style="font-size:20px;" class="glyphicon glyphicon-log-out"></span></a></div>
				<div class="panel-body">
					<div class="detail">
						

								<div class="col-md-12 col-sm-12">
									<div class="panel panel-default">
									<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Personal Info</div>
									<div class="panel-body">
										<div class="col-md-5 col-sm-12 centering">
											<form action="upload.php?idno=<?=$_SESSION['staffid']?>&&src=pharmhome&&user=staff" method="post" enctype="multipart/form-data">
											     <p><?php if (isset($message)) {echo "$message";}?></p>
											     <div class="mytooltipinput">												     
												     <img class="dpic" id="dpic" 
												     src="<?php if (isset($dpic)) {echo "images/uploads/$dpic";}else{ if ($_GET['user'] == "pat") {echo "images/pat.png";} else {echo "images/doc.png";} }?>" 
												     width="150px" height="150px" onclick="openDialog()">
												     <span class="tooltiptextinput">&#10004 Click to Upload a New Image.</span>
											     </div><br>
											   
											    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/gif, image/jpeg, image/jpg, image/png" class="hidden"  onchange="loadFile(event)">
											    
											    <br><input type="submit" value="Update Image" name="submit" id="uploadimage" class="accept-button hidden"></p>
											</form>
										</div>
									
										<div class="col-md-7 col-sm-12 " style="padding-top:30px;">
											<p>Name: Dr. <?= ucwords($name) ?></p>
											<p>Staff No: <?= $idnumber ?></p>
											<p>Email: <?= $email ?></p>
										</div>
									</div>
									</div>
								</div>
					</div>
				</div>
					
						
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Select a Service</div>
					<div class="panel-body">
			
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xsm-12 parent">
								<a href="updatestaff.php"><div class="contents-invert">
									<p>Update Personal Details</p>
								</div></a>
							</div>

							<div class="col-md-6 col-sm-6 col-xsm-12 parent">
								<a href="dispense.php"><div class="contents-invert">
									<p>Dispense Medicine</p>
								</div></a>
							</div>

						</div>	
						
					</div>
				</div>	
					
				</div>
			</div>

	</div>
	


<div class="col-md-1"></div>
</div>

<script>

  var loadFile = function(event) {
    var output = document.getElementById('dpic');
    output.src = URL.createObjectURL(event.target.files[0]);
    var button = document.getElementById('uploadimage');
    $(button).removeClass('hidden');
  };


</script>