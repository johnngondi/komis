<div class="row contents">
<div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12 col-xsm-12 ">
    
    <div class="panel panel-default">
      <div class="panel-heading"><h3 style="color:#009933;">Suspend Staff</h3></div>
      <div class="panel-body">
        <p id="status"><?php if (isset($status)) {echo "$status";}?></p>
        <form method="GET" action="suspendstaff.php" name="checkform" role="form">
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
        <form method="POST" action="suspendstaff.php" class="<?php if(isset($visibility1)){echo "$visibility1";}?>" id="deleteform" name="deleteform" role="form">
            <input class="text-input hidden" type="textfield" name="postidno" id="postidno" value="<?php if(isset($postidno)){echo "$postidno";}?>">
          <div class="form-group col-md-12 col-sm-12">
            <div class="mytooltipreset"><input class="warn-button" type="submit" value="Suspend Staff"></input>
            <span class="tooltiptextreset">&#10060 Susre to Suspend.<br>&#10004 Click to Suspend.</span></div>
          </div>  
        </form>
        <input type="button" class="reset-button" value="Back" onclick="redirect ()"></input>
      </div>
    </div>
    
  </div>

<div class="col-md-1"></div>
</div>

<!-- Suspended Staff List begins here-->
<div class="row contents">
<div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12 col-xsm-12 ">
    
    <div class="panel panel-default">
        <div class="panel-heading"><h3 style="color:#009933;">Suspended Staff</h3></div>
        <div class="panel-body">
        <?php if (isset($status1)) {echo "$status1";} ?>
          <div>
            <?php 

              if (isset($_GET['state']))
              {
                  echo "<p class=\"text-success centering\">Staff Resumed Successfully.";
              } 
              if (isset($activated)) 
              {
                  echo "$activated";
              }
            ?>
          </div>  
        <table class="table table-striped table-bordered table-hover <?php if (isset($visibility)) {echo "$visibility";}?>">
              <thead class="table-contents">
                <tr >
                  <th class="centering">Picture</th>
                  <th class="centering">Staff ID</th>
                  <th class="centering">Name</th>
                  <th class="centering">Email</th>
                  <th class="centering">Hospital</th>
                  <th class="centering">Position</th>
                  <th class="centering">Action</th>
                </tr>
              </thead>
              <tbody class="table-contents">

              <?php foreach ($staffs as $staff) : ?>

                <tr>
                  <td><a href="javascript:newTab('<?php if(isset($staff['image']) && $staff['image'] != ""){echo "./images/uploads/".$staff['image'];}else{echo "./images/doc.png";} ?>')"> 
                  <img class="dpic-thumb" src="<?php if(isset($staff['image']) && $staff['image'] != ""){echo "./images/uploads/".$staff['image'];}else{echo "./images/doc.png";} ?>"
                   height="50px" width="50px" title = "Click to View Image"></td>
                  <td><?= $staff['idnumber'] ?></td>
                  <td><?= ucwords($staff['names']) ?></td>
                  <td><?= $staff['email'] ?></td>
                  <td><?= ucfirst($staff['hosid']) ?></td>
                  <td><?= ucfirst($staff['role']) ?></td>
                  <td>
                  <center>
                  <div class="mytooltipreset"><a href="resumestaff.php?idno=<?= $staff['idnumber'] ?>"><button class="accept-button">Resume Staff</button></a>
                  <span class="tooltiptextreset">&#10060 Sure to Resume?<br>&#10004 Click to Resume.</span></div>
                
                  <div class="mytooltipreset"><a href="deletestaff.php?staffid=<?= $staff['idnumber'] ?>"><button class="reset-button">Delete Staff</button></a>
                  <span class="tooltiptextreset">&#10060 Sure to Delete?<br>&#10004 Click to Delete.</span></div>
                  </center>
                  </td>
                </tr>

               <?php endforeach; ?>                
              </tbody>
        </table>
       </div>
      </div>
      
    <input class="reset-button" type="button" value="Back" onclick="redirect ()"></input>
    </div>
  </div>

<div class="col-md-1"></div>
</div>