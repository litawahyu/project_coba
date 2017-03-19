<?php 
include_once "view2/header.php";
require_once "init.php";
$title = "DATA KECELAKAAN TAHUN 2015";
$data = tampil_data();

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
                  <th width="5%">No.</th>
                  <th width="30%">No. Laporan</th>
                
                  <th width="15">Tanggal</th>
                  <th width="20%">Kecamatan</th>
                  <th width="30%">Lokasi</th>
                  <th width="30%">Jenis Kecelakaan</th>
                  <th width="20%">Latitude</th>
                  <th width="20%">Longitude</th>                 
                  <th width="5%">LR</th>
                  <th width="5%">LB</th>
                  <th width="5%">MD</th>
                </tr>
               
              </thead>
              <tbody>
             <?php while($row=mysqli_fetch_assoc($data)):?>
              <tr>
                <td><?php echo $row['id_data']?></td>
                <td><?php echo $row['no_lap']?></td>
                <td><?php echo $row['tanggal']?></td>                
                <td><?php echo $row['nama_kecamatan']?></td>
                <td><?php echo $row['nama_lokasi']?></td>
                <td><?php echo $row['jenis_kecelakaan']?></td>
                <td><?php echo $row['latidude']?></td>
                <td><?php echo $row['longitude']?></td>
                <td><?php echo $row['lr']?></td>
                <td><?php echo $row['lb']?></td>
                 <td><?php echo $row['md']?></td>
               
              </tr> <?php  endwhile; ?>
             


              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "view2/footer.php" ?>