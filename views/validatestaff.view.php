<div class="row contents">
<div class="col-md-1"></div>
  <div class="col-md-10 col-sm-12 col-xsm-12 ">
    
    <div class="panel panel-default">
        <div class="panel-heading"><h3 style="color:#009933;">Validate Staff</h3></div>
        <div class="panel-body">
          <div>
            <?php 

              if (isset($_GET['state']))
              {
                  echo "<p class=\"text-success centering\">Staff Activated Successfully.";
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
                  <div class="mytooltipreset"><a href="validatestaff.php?staffid=<?= $staff['idnumber'] ?>"><button class="accept-button">Activate Staff</button></a>
                  <span class="tooltiptextreset">&#10060 Staff Real?<br>&#10004 Click to Accept.</span></div>
                
                  <div class="mytooltipreset"><a href="delete.php?staffid=<?= $staff['idnumber'] ?>"><button class="reset-button">Delete Staff</button></a>
                  <span class="tooltiptextreset">&#10060 Staff not Real?<br>&#10004 Click to Delete.</span></div>
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