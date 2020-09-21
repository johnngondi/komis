<div class="row contents">
<div class="col-md-2 col-sm-1"></div>
<div class="col-md-8 col-sm-10">
 
 <!-- Start of Serach Patient --> 
  <div id="diagnose" class="panel panel-default <?=$visibilitydiag?>">
    <div class="panel-heading"><h3 style="color:#009933;">Diagnose Patient</h3></div>
      <div class="panel-body">
          <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
          <form method="GET" action="dispense.php" name="checkform" role="form">
            <div class="form-group col-md-8 col-sm-9">
                <label for="staffid">Patient ID Number  </label>
                <input class="text-input" type="textfield" name="id" id="staffid" placeholder="Enter Patient ID Number">
            </div>
            <div class="form-group col-md-4 col-sm-3">    
                  <input class="accept-button" id="checkform" type="button" value="View Details" onclick="validateFind()">
            </div>
          </form>

          <div  class="panel-body <?=$visibility?>">
            <div class="col-md-4 col-sm-6 centering">
              <img class="dpic" src="<?php if(isset($image)){echo "images/uploads/$image";}else{echo "images/pat.png";}?>" height="150px" width="150px">
            </div>

            <div class="col-md-8 col-sm-6 details">
              <h4>Name: <?php if(isset($name)){echo "$name";}else{echo "Search to View...";}?></h4><br>

              <h4>ID Number: <?php if(isset($idno)){echo "$idno";}else{echo "Search to View...";}?></h4><br>

              <h4>Email: <?php if(isset($email)){echo "$email";}else{echo "Search to View...";}?></h4><br>

            </div>

            <div class="col-md-12 col-sm-12">
              <br>
              <div class="form-group col-md-12 col-sm-12">    
                  <input style="width:200px;" class="accept-button" type="button" value="Dispense Medicine" onclick="showDrugs()">
              </div>

            </div>
          </div>

      </div>
  </div>
<!-- end of Search patient -->

<!-- Start of Medicine add Patient --> 
  <div id="drug" class="panel panel-default <?=$visibilitymedicine?>">
    <div class="panel-heading"><h3 style="color:#009933;">Medication Details</h3></div>
      <div class="panel-body">
          <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
          
          <div class="">
            <table class="table table-striped table-bordered table-hover <?php if (isset($visibility)) {echo "$visibility";}?>">
                  <thead class="table-contents">
                    <tr >
                      <th class="centering">Medicine</th>
                      <th class="centering">Dosage</th>
                      <th class="centering">Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-contents">

                  <?php foreach ($specdrugs as $specdrug) : ?>

                    <tr>
                      <td><?= ucwords($specdrug['drugcat'])." - ".ucwords($specdrug['drugname']) ?></td>
                      <td><?= $specdrug['dose'] ?></td>
                      <td>
                        <center>
                          <a href="dispenseok.php?id=<?=$idno?>&&drugid=<?= $specdrug['drugid'] ?>&&criteria=1"><button class="accept-button">Dispense Drug</button></a>
                        
                      
                          <button class="warn-button" onclick="showAlt('<?= $specdrug['drugid'] ?>')">Not Availbale</button>
                        </center>
                       
                      </td>
                    </tr>

                   <?php endforeach; ?>                
                  </tbody>
            </table>

          </div>

          <div class="centering <?=$visibilityalt?>" id="alt">
            <p>Select Alternative Medicine</p>
              <form method="POST" action="dispenseok.php?id=<?=$idno?>&&criteria=2" name="medform" role="form">
                
                <div class="form-group col-md-6 col-sm-6"  id="plate">
                    <label for="medname">Select Medicine</label>
                    <select class="text-input" id="medname" name="medname">

                    <?php foreach ($medicines as $medicine) : ?>
                      <option value="<?= $medicine['drugname'] ?>"><?= ucwords($medicine['drugname']) ?></option>"                               
                     <?php endforeach; ?>
                     
                    </select>
                </div>
                <input class="hidden" type="textfield" name="oldid" id="id">
                <div class="form-group col-md-6 col-sm-6">
                    <label for="dose">Enter Dose</label><br>
                    <input class="text-input" type="textfield" name="dose" id="dose" placeholder="e.g (2 x 3) for 10 days" required>
                </div>

                <div class="form-group col-md-12 col-sm-12">    
                      <input class="accept-button" id="medicine" type="submit" value="Save">
                </div>
              </form>

          </div>

            <div class="form-group col-md-12 col-sm-12">    
                <a href="pharmhome.php"><input class="accept-button" type="button" value="Done"></a>
            </div>
      </div>
  </div>
<!-- end of Medicine add patient -->
 <input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>

</div>
<div class="col-md-2 col-sm-1"></div>
</div>