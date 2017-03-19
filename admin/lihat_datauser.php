<?php 
include_once "view2/header.php";
require_once "../core/init.php";
$title = "DATA USER";
$datauser=tampil_user();
 ?>

      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-info panel-dashboard">
            <div class="panel-heading centered">
              <h2 class="panel-title"><strong> - <?php echo $title ?> - </strong></h2>
            </div>
            <div class="panel-body">
              <table class="table table-bordered table-striped table-admin">
              <thead>
                <tr>
                  <th width="3%">No.</th>
                  <th width="10%">Username</th>
                  <th width="5%">Status</th>
                 
                </tr>
               
              </thead>
              <tbody>
             <?php while($row=mysqli_fetch_assoc($datauser)):?>
              <tr>
                <td><?php echo $row['id_user']?></td>
                <td><?php echo $row['nama']?></td>
                <td><?php echo $row['status']?></td>
               
               
              </tr> <?php endwhile; ?>
             
              

              

              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "view2/footer.php" ?>