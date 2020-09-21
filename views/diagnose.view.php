<div class="row contents">
<div class="col-md-2 col-sm-1"></div>
<div class="col-md-8 col-sm-10">
 
 <!-- Start of Serach Patient --> 
  <div id="diagnose" class="panel panel-default <?=$visibilitydiag?>">
    <div class="panel-heading"><h3 style="color:#009933;">Diagnose Patient</h3></div>
      <div class="panel-body">
          <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
          <form method="GET" action="diagnose.php" name="checkform" role="form">
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
              <div class="form-group col-md-6 col-sm-6">    
                  <input style="width:200px;" class="accept-button" type="button" value="Examine Patient" onclick="showExamine()">
              </div>

              <div class="form-group col-md-6 col-sm-6">    
                  <input style="width:200px;" class="accept-button" type="button" value="Treatment History" onclick="newTab('treatmenthistory.php?id=<?=$idno?>')">
              </div>
            </div>
          </div>

      </div>
  </div>
<!-- end of Search patient -->

<!-- Start of Examination Patient --> 
  <div id="examine" class="panel panel-default <?=$visibilityexamine?>">
    <div class="panel-heading"><h3 style="color:#009933;">Examine Patient</h3></div>
      <div class="panel-body">
          <p id="statusexam" class="text-danger centering"></p>
          <form method="POST" action="examination.php?id=<?=$idno?>" name="examineform" role="form">
            <div class="form-group col-md-12 col-sm-12">
                <label for="examination">Examination</label><br>
                <textarea rows="15" class="text-input text-area" onkeyup="validateEntry ()" name="examination" id="examination" placeholder="Enter Examination Use letters, numbers, comma(,), period(.), fullcolon(:), semmicolon(;), hyphen(-) and forwardslash(/) only"></textarea>
                <span class="help-block">Use letters, numbers, comma(,), period(.), fullcolon(:), semmicolon(;), hyphen(-) and forwardslash(/) only.</span>
            </div>

            <div class="form-group col-md-12 col-sm-12">    
                  <input class="accept-button" id="examination" type="button" value="Save" onclick="validateExam()">
            </div>
          </form>
      </div>
  </div>
<!-- end of Examination patient -->

 <!-- Start of disease add Patient --> 
  <div id="disease" class="panel panel-default <?=$visibilitydisease?>">
    <div class="panel-heading"><h3 style="color:#009933;">Enter Disease Details</h3></div>
      <div class="panel-body">
          <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
          <form method="POST" action="disease.php?id=<?=$idno?>&&hosid=<?=$_GET['hosid']?>&&exid=<?=$_GET['exid']?>" name="diseaseform" role="form">
            

            <div class="form-group col-md-6 col-sm-12"  id="plate">
                <label for="disname">Select Disease</label>
                <select class="text-input" id="disname" name="disease">

                <?php foreach ($diseases as $disease) : ?>
                  <option value="<?= $disease['diseasename'] ?>"><?= ucwords($disease['diseasename']) ?></option>"                               
                 <?php endforeach; ?>
                 
                </select>
            </div>

            <div class="form-group col-md-6 col-sm-12">    
                  <input class="accept-button" id="disease" type="submit" value="Add">
            </div>
          </form>

          <div class="<?=$visibilitytable1?>">
            <table class="table table-striped table-bordered table-hover <?php if (isset($visibility)) {echo "$visibility";}?>">
                  <thead class="table-contents">
                    <tr >
                      <th class="centering">Disease Genre</th>
                      <th class="centering">Disease Name</th>
                      <th class="centering">Action</th>
                    </tr>
                  </thead>
                  <tbody class="table-contents">

                  <?php foreach ($specdiseases as $specdisease) : ?>

                    <tr>
                      <td><?= ucwords($specdisease['diseasecat']) ?></td>
                      <td><?= ucwords($specdisease['diseasename']) ?></td>
                      <td>
                      <center>
                      <div class="mytooltipreset"><a href="removedisease.php?id=<?=$idno?>&&diseaseid=<?= $specdisease['diseaseid'] ?>&&hosid=<?=$_GET['hosid']?>&&exid=<?=$_GET['exid']?>"><button class="reset-button">Remove Disease</button></a>
                      <span class="tooltiptextreset">&#10060 Sure to remove?<br>&#10004 Click to Remove.</span></div>
                      </center>
                      </td>
                    </tr>

                   <?php endforeach; ?>                
                  </tbody>
            </table>

            <div class="form-group col-md-12 col-sm-12">    
                <input class="accept-button" type="button" value="Commit" onclick="showDrugs()">
            </div>
          </div>
      </div>
  </div>
<!-- end of Disease add patient -->

<!-- Start of Medicine add Patient --> 
  <div id="drug" class="panel panel-default <?=$visibilitymedicine?>">
    <div class="panel-heading"><h3 style="color:#009933;">Enter Medication Details</h3></div>
      <div class="panel-body">
          <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
          <form method="POST" action="medicine.php?id=<?=$idno?>&&hosid=<?=$_GET['hosid']?>&&exid=<?=$_GET['exid']?>" name="medform" role="form">
            

            <div class="form-group col-md-6 col-sm-6"  id="plate">
                <label for="medname">Select Medicine</label>
                <select class="text-input" id="medname" name="medname">

                <?php foreach ($medicines as $medicine) : ?>
                  <option value="<?= $medicine['drugname'] ?>"><?= ucwords($medicine['drugname']) ?></option>"                               
                 <?php endforeach; ?>
                 
                </select>
            </div>
            
            <div class="form-group col-md-6 col-sm-6">
                <label for="dose">Enter Dose</label><br>
                <input class="text-input" type="textfield" name="dose" id="dose" placeholder="e.g (2 x 3) for 10 days" required>
            </div>

            <div class="form-group col-md-12 col-sm-12">    
                  <input class="accept-button" id="medicine" type="submit" value="Add">
            </div>
          </form>

          <div class="<?=$visibilitytable2?>">
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
                      <div class="mytooltipreset"><a href="removedrug.php?id=<?=$idno?>&&drugid=<?= $specdrug['drugid'] ?>&&hosid=<?=$_GET['hosid']?>&&exid=<?=$_GET['exid']?>"><button class="reset-button">Remove Drug</button></a>
                      <span class="tooltiptextreset">&#10060 Sure to remove?<br>&#10004 Click to Remove.</span></div>
                      </center>
                      </td>
                    </tr>

                   <?php endforeach; ?>                
                  </tbody>
            </table>

            <div class="form-group col-md-12 col-sm-12">
                <div class="form-group col-md-12 col-sm-12">
                    <label for="dose">Select Next Visit Date</label><br>
                    <input id="nextdate" class="text-input" type="date" name="nextdate">
                </div>

                <div class="form-group col-md-12 col-sm-12">    
                      <button id="set-date" class="btn btn-success" onclick="setDate('<?=$idno?>')">Set Date</button>
                </div>    
                <a id="done" href="dochome.php" class="btn btn-success btn-lg">Complete Diagnosis</a>
            </div>
          </div>
      </div>
  </div>
<!-- end of Medicine add patient -->

 <input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>

</div>
<div class="col-md-2 col-sm-1"></div>
</div>

<div id="feedback"></div>

<script type="text/javascript">
  function setDate(pat) {
    var date = $('#nextdate').val();

    if (date != '') {
      var dateOb = new Date(date);
      if (dateOb > new Date()) {
        $('#set-date').html('Setting Date...');

        $.ajax ({
          url: 'set_date.php',
          type: 'POST',
          data: {'date':date, 'pat':pat},
          success: function(feedback) {
            $('#feedback').html(feedback);
          }
        });

      } else {
        alert('Next Visit Date must be future');
      }
     

    } else {
      alert('Select Next Visit Date');
    }
  }
</script>