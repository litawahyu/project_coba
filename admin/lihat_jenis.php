<?php 
include_once "view2/header.php";
require_once "init.php";
$title = "DATA JENIS KECELAKAAN";
$datajenis=jenis();

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
                  <th width="3%">Id</th>
                  <th width="10%">Jenis Kecelakaan</th>
                 
                 
                </tr>
               
              </thead>
              <tbody>
            <?php while($row=mysqli_fetch_assoc($datajenis)):?>
              <tr>
                <td><?php echo $row['id_jeniskec']?></td>
                <td><?php echo $row['jenis_kecelakaan']?></td>
               
               
               
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