<?php
include_once "view2/header.php";
require_once "init.php";

$error='';
  if (isset($_POST['submit'])) {
    $nolap         =$_POST['txt_nolap'];
    $tanggal       =$_POST['tgl'];
    $id_kecamatan  =$_POST['txt_idcamat'];
    $id_lokasi     =$_POST['txt_idlokasi'];
    $id_jenis      =$_POST['txt_idjenis'];
    $lr            =$_POST['txt_lr'];
    $lb            =$_POST['txt_lb'];
    $md            =$_POST['txt_md'];
    if (tambah_data ($nolap,$tanggal,$id_kecamatan,$id_lokasi,$id_jenis,$lr,$lb,$md)) {
      echo 'data berhasil ditambahkan';
      # code...
    }else {
    $error='Mohon dicek ulang';
    }


}

?>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery-ui/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="js/jquery-ui/jquery-ui.css">
<form class="form" action="" method="post">
	<table class="table-list" width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr height="3%">
      <td width="10%" colspan="3" bgcolor="#F5F5F5" align="center"><b>Tambah Data Kecelakaan</b></td>
    </tr>
 
    <tr>
      <td width="15%"><b>Nomer Laporan</b></td>
      <td width="2%"><b>:</b></td>
      <td><input name="txt_nolap" type="text" value=" " size="40" maxlength="100"> </td>
    </tr>

    <tr>
      <td> Kecamatan </td>
      <td><b>:</b></td>
      <td><select class="" name="txt_idcamat">
        <option value="">...</option>
        <?php
        $camat=kecamatan();
        while($row=mysqli_fetch_assoc($camat)):?>
          <option value=<?php echo $row['id_kecamatan'] ?>><?php echo $row['nama_kecamatan'] ?></option>
        <?php endwhile; ?>
      </select>
    </td>
    </tr>

     <tr>
      <td> Lokasi </td>
      <td><b>:</b></td>
      <td><select class="" name="txt_idlokasi">
        <option value="">...</option>
        <?php
        $id_lokasi=lokasi();
        while($row=mysqli_fetch_assoc($id_lokasi)):?>
          <option value=<?php echo $row['id_lokasi'] ?>><?php echo $row['nama_lokasi'] ?></option>
        <?php endwhile; ?>
      </select>
      <td ><a href="tambah_lokasi.php" target="_self" alt="Tambah Data"><img src="../img/add.png" height="25" border="0" /></a></td>
    </td>
    </tr>

    	 <tr>
      <td> Tanggal Kejadian </td>
      <td><b>:</b></td>
       <td>
    		<input type="text" class="input-tanggal" name="tgl">
  		</td>

    <tr>
      <td> Jenis Kecelakaan </td>
      <td><b>:</b></td>
      <td><select class="" name="txt_idjenis">
        <option value="">...</option>
        <?php
        $jeniskec=jenis();
        while($row=mysqli_fetch_assoc($jeniskec)):?>
          <option value=<?php echo $row['id_jeniskec'] ?>><?php echo $row['jenis_kecelakaan'] ?></option>
        <?php endwhile; ?>
      </select>
      <td ><a href="tambah_jenis.php" target="_self" alt="Tambah Data"><img src="../img/add.png" height="25" border="0" /></a></td>
    </td>
    </tr>

   
    <tr>
      <td>Luka Ringan</td>
      <td><b>:</b></td>
      <td><input name="txt_lr" type="text" value=" " size="10" maxlength="100"> </td> 
     <tr>
      <td>Luka Berat</td>
      <td><b>:</b></td>
      <td><input name="txt_lb" type="text" value=" " size="10" maxlength="100"> </td>
    </tr>
     <tr>
      <td>Meninggal Dunia</td>
      <td><b>:</b></td>
      <td><input name="txt_md" type="text" value=" " size="10" maxlength="100"> </td>
    </tr> 
</table>

<button align="center" type="submit" name="submit" class="btn btn-primary" >Save</button>

   <div ><?php echo $error;?></div><br>
</form>
<script type="text/javascript">
$(document).ready(function(){
	$('.input-tanggal').datepicker();
});
</script>
<iframe width=174 height=189 name="gToday:normal:calender/agenda.js" id="gToday:normal:calender/agenda.js" src="calender/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
<?php include_once "view2/footer.php"; ?>