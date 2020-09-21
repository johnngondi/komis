<div class="row">
<div class="col-md-1"></div>
	<div class="col-md-10">
		

			<div class="panel panel-default">
				<div class="panel-heading" style="text-align:center;color:#009933;font-size:30px;">Welcome <?= ucwords($name) ?><br><br><a href="changepass.php">Change Password <span style="font-size:20px;" class="glyphicon glyphicon-lock"></span> </a> <br class="">  <a href="logout.php">Log out <span style="font-size:20px;" class="glyphicon glyphicon-log-out"></span></a></div>
				<div class="panel-body">
					<div class="detail">
						<div class="panel panel-default">
							<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Basic info</div>
							<div class="panel-body">

										<div class="col-md-5 col-sm-12 centering">
											<form action="upload.php?idno=<?=$_SESSION['patid']?>&&src=pathome&&user=pat" method="post" enctype="multipart/form-data">
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
									
										<div class="col-md-7 col-sm-12" style="padding-top:30px;">
											<p>Pat Name: <?= ucwords($name) ?></p>
											<p>Id No: <?= $idnumber ?></p>
											<p>Email: <?= $email ?></p>											
											<p>Next Visit: <?php if ($next_visit != '') {
												$diff =  strtotime($next_visit)-strtotime(date("Y-m-d"));

												if ($diff < 0) {
													echo date('D F d, Y', strtotime($next_visit))."<span class='text-danger'> (Past Due)</span>";

												} else if($diff == 0) {	
													echo date('D F d, Y', strtotime($next_visit))."<span class='text-danger'> (Today Visit Now)</span>";
												} else {												echo date('D F d, Y', strtotime($next_visit))."<span class='text-warning'> (".(($diff/60/60/24)-1)." Days Remaining)</span>";

												}
												
													
												
											} else {
												echo "<span class='text-primary'> You have no Upcoming Visit</span>";
											} ?></p>
										</div>
							
								</div>
						</div>
					</div>
					
						
				<div class="panel panel-default">
					<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Select a Service</div>
					<div class="panel-body">
			
						<div class="row">
							<div class="col-md-6 col-sm-6 col-xsm-12 parent">
								<a href="updatepat.php"><div class="contents-invert">
									<p>Update Personal Details</p>
								</div></a>
							</div>

							<div class="col-md-6 col-sm-6 col-xsm-12 parent">
								<a href="treatmenthistory.php"><div class="contents-invert">
									<p>View Treatment History</p>
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