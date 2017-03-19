<?php 
include_once "view2/header.php";
require_once "init.php";
$title = "DATA LOKASI";
$datalokasi=lokasi();
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
                  <th width="10%">Nama Lokasi</th>
                  <th width="5%">Kecamatan</th>
                  <th width="20%">Latitude</th>
                  <th width="20%">Longitude</th>   
                 
                </tr>
               
              </thead>
              <tbody>
             <?php while($row=mysqli_fetch_assoc($datalokasi)):?>
              <tr>
                <td><?php echo $row['id_lokasi']?></td>
                <td><?php echo $row['nama_lokasi']?></td>
                 <td><?php echo $row['nama_kecamatan']?></td>
                <td><?php echo $row['latidude']?></td>
                 <td><?php echo $row['longitude']?></td>
              
               
               
              </tr> <?php endwhile; ?>

              
              </tbody>
            </table>

            <tr><a href="cetak_lokasi.php" target="_self" alt="Tambah Data"> <img src="../img/cetak.png" width="50" /></td>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "view2/footer.php" ?>