<?php
	if (isset($_GET['ppic'])) {
		$ppic = $_GET['ppic'];
	}
?>

<div class="row">
<div class="col-md-2 col-sm-1"></div>

	<div class="col-md-8 col-sm-10 contents"> 
		<h1 class="text-success">Congratulations!</h1>
		<p class="centering">You have successfully registred to KOMIS.</p>
		<p class="centering">You will be able to access your medical records online.</p>
		<p class="centering">Now upload your picture to Complete Registration</p>
		<div style="margin-top:10px;"> <?php if (isset($message)) {echo $message;}?></div>
		<form action="upload.php?idno=<?=$_GET['idno']?>&&src=regsuccess&&user=<?=$_GET['user']?>" method="post" enctype="multipart/form-data">
		     <div class="mytooltipinput">
			     <p class="centering">
			     <img class="dpic" id="dpic" 
			     src="<?php if (isset($ppic)) {echo "images/uploads/$ppic";}else{ if ($_GET['user'] == "pat") {echo "images/pat.png";} else {echo "images/doc.png";} }?>" 
			     width="200px" height="200px" onclick="openDialog()"></p>
			     <span class="tooltiptextinput">&#10004 Click to Upload a New Image.<br>&#10004 Will be used as your image.</span>
		     </div><br>
		   
		    <input type="file" name="fileToUpload" id="fileToUpload" accept="image/gif, image/jpeg, image/jpg, image/png" class="hidden"  onchange="loadFile(event)">
		    
		    <input type="submit" value="Upload Image" name="submit" id="uploadimage" class="accept-button">
		</form>
		<?php if ($_GET['user'] == "staff") {
			echo "<p class=\"centering\">You will beable to Log in as soon as your account is activated.</p>";
			}?>
		
		
    <input class="reset-button" type="button" value="Back" onclick="redirect ()"></input></p>
	</div>

<div class="col-md-2 col-sm-1"></div>	
</div>
<script>

  var loadFile = function(event) {
    var output = document.getElementById('dpic');
    output.src = URL.createObjectURL(event.target.files[0]);
  };


</script>