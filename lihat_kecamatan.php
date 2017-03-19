<?php 
include_once "view2/header.php";
require_once "../core/init.php";
$title = "DATA USER";

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
              <?php
                $data = file_get_contents('http://localhost/empat/function/user.php');
                $no=1;
                if(json_decode($data,true)){
                  $obj = json_decode($data);
                  foreach($obj->results as $item){
              ?>
              <tr>
                <td><?php echo $id_user;?></td>
                <td><?php echo $item->nama;?></td>
                <td><?php echo $item->status;?></td>
               
               
              </tr>
              <?php $no++; }}

              else{
                echo "data tidak ada.";
                } ?>

              
              </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include_once "view2/footer.php" ?>