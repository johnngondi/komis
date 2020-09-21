<div class="row contents hidden visible-print">
	<div class="col-md-1"></div>

	<!--<div class="col-md-3 col-sm-12 col-xs-12">
		<center>
		<p><img src="./images/komis.png" height="100px" width="130px"></p>
		</center>
	</div>-->

	<div class="col-md-12 col-sm-12 col-xs-12">
			<div style="float:left; margin-top:30px;">
				<center>
				<p><img src="./images/komis.png" height="100px" width="100px"></p>
				</center>
			</div>
		
			<div style="float:right;">
				<h1>Kenya Online Medical Information System</h1>
				<h2 style="margin-top:0px; padding-top:0px;">Access your Medical info anywhere anytime</h2>
				<h4>P.O. Box 000-00000 Kenya Website:www.komis.com</h4>
				<h4>Phone: 0700 000 000 Email:info@komis.com</h4>			
			</div>
	</div>

	<div class="col-md-1"></div>
</div>

<div class="row contents">
	<div class="col-md-1"></div>
		  <div class="col-md-10 col-sm-12 col-xsm-12 ">
				<div class="panel panel-default">
			        <div class="panel-heading"><h3 style="color:#009933;">Disease Analysis</h3></div>
			        <div class="panel-body">
			        <div class="panel-body">
			        	<h5 class="centering hidden-print"><b>Filter Using</b></h5>
			        	<form method="POST" class="hidden-print" action="diseaseanalysis.php" name="analysisform" role="form">
			        									
							<div class="form-group col-md-6 col-sm-6">
								<label for="year">Select Year</label><br>
									<select class="text-input" name="year" id="year">
										<?php 
										$startyear = 2016;
										$current = date("Y");

										while ( $current >= $startyear ) {
											echo "<option value=\"$current\">$current</option>";
											$current = $current - 1;
										}
										?>
									</select>
							</div>

							<div class="form-group col-md-6 col-sm-6">
			        			<label for="month">Select Month</label><br>
				        		<select class="text-input" name="month" id="month">
									<option value="1">January</option>
									<option value="2">February</option>
									<option value="3">March</option>
									<option value="4">April</option>
									<option value="5">May</option>
									<option value="6">June</option>
									<option value="7">July</option>
									<option value="8">August</option>
									<option value="9">September</option>
									<option value="10">October</option>
									<option value="11">November</option>
									<option value="12">December</option>
								</select>
							</div>

							<div class="col-sm-12 col-md-12">								
								<input class="accept-button" id="submit-form" type="submit" value="View Filtered">
							</div>
			        	</form>
			        	
			        </div>
			        	<div style="font-size:30px;"><b><?= $message ."." ?></b></div><br>
						<table class="table table-striped table-bordered table-hover ">
			              <thead class="table-contents">
			                <tr>
			                  <th class="centering">Disease Category</th>
			                  <th class="centering">Disease Name</th>
			                  <th class="centering">Cases (No. of Patients)</th>
			                </tr>
			              </thead>
			              <tbody style="color:#009933;">
			              <?php 
			              for ($i=0; $i < $totaldiseases; $i++) { 
								$disease = $diseases[$i];
								$diseaseid = $disease['diseaseid'];
								$diseasename = $disease['diseasename'];
								$diseasecat = $disease['diseasecat'];

								//getdisease details
								$sql = "SELECT count(*) FROM prescription WHERE diseaseid=$diseaseid".$criteria;
								$cases = getnumberofrows($conn, $sql);

								echo "
								<tr>
				                  <td class=\"centering\">".ucwords($diseasecat)."</td>
				                  <td class=\"centering\">".ucwords($diseasename)."</td>
				                  <td class=\"centering\">$cases</td>
				                </tr>

								";		
							}
			               ?>
				                		              				                
			              </tbody>
			              
        				</table>
						<input class="accept-button hidden-print" id="submit-form" onclick="print()" type="button" value="Print"> 
						<input type="button" class="reset-button hidden-print" value="Back" onclick="redirect ()"></input>
			        </div>
			    </div>
		  </div>
	<div class="col-md-1"></div>
</div>