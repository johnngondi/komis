<div class="row">
<div class="col-md-1 col-sm-1"></div>

	<div class="col-md-10 col-sm-10 contents">
		<div class="panel panel-default">
		<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Treatment History</div>
			<div class="panel-body">
				<?php foreach ($examinationhistorys as $examinationhistory) : ?>

					<div class="col-md-12">
						<div class = "panel panel-default">						
						<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;"><b><?= DateTime::createFromFormat('!m',$examinationhistory['month'])->format('F')." ".$examinationhistory['day'].", ".$examinationhistory['year']." - ".$examinationhistory['hosname']?></b></div>
							<div class="panel-body" style="text-align:left;font-size:15px;">
								<div class="col-md-4">
									<div class = "panel panel-default">						
									<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Diagnosis</div>
										<div class="panel-body" style="text-align:left;font-size:15px;">
											<p><?= ucfirst(decrypttext($examinationhistory['examination']))?></p>
											<b>Physician: </b><?= $examinationhistory['names']?><br>
											<b>Date: </b><?= DateTime::createFromFormat('!m',$examinationhistory['month'])->format('F')." ".$examinationhistory['day'].", ".$examinationhistory['year']?>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class = "panel panel-default">						
									<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Disease(s)</div>
										<div class="panel-body" style="text-align:left;font-size:15px;">
											<?php 
												$data = array(
													'patid' => $patid, 
													'day' => $examinationhistory['day'],
													'month' => $examinationhistory['month'],
													'year' => $examinationhistory['year'],
													'examid' => $examinationhistory['examid']
												);

												$diseases = getDiseasesHistory($conn,$data); 
											?>
											<?php foreach ($diseases as $disease) : ?>
												<?=$disease['diseasename']."<br>"?>
											<?php endforeach; ?>	
											<br><p><b>Date: </b><?= DateTime::createFromFormat('!m',$examinationhistory['month'])->format('F')." ".$examinationhistory['day'].", ".$examinationhistory['year']?></p>
										</div>
									</div>
								</div>
								
								<div class="col-md-4">
									<div class = "panel panel-default">						
									<div class="panel-heading" style="text-align:center;color:#009933;font-size:20px;">Medication</div>
										<div class="panel-body" style="text-align:left;font-size:15px;">
										<?php 
												$data = array(
													'patid' => $patid, 
													'day' => $examinationhistory['day'],
													'month' => $examinationhistory['month'],
													'year' => $examinationhistory['year'],
													'examid' => $examinationhistory['examid']
												);

												$drugs = getDrugsHistory($conn,$data);  
											?>
											<?php foreach ($drugs as $drug) : ?>
												<?php echo $drug['drugname']; if ($drug['state'] == 1) {echo "<span class=\"text-success\"> - Dispensed</span><br>";}else{echo "<span class=\"text-danger\"> - Not Dispensed</span><br>";}?>
											<?php endforeach; ?>	
											<br><b>Pharmacist: </b><?= $drug['names']?><br>
											<b>Date: </b><?= DateTime::createFromFormat('!m',$examinationhistory['month'])->format('F')." ".$examinationhistory['day'].", ".$examinationhistory['year']?>
										
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
				
		<input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>
			</div>
		</div>

	</div>
								
<div class="col-md-1 col-sm-1"></div>
</div>