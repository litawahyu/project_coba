<?php
include_once "view2/header.php";
require_once "init.php";

$error='';
  if (isset($_POST['submit'])) {
    $jenis =$_POST['jenis_kecelakaan'];
    if (tambah_jenis($jenis)) {
      echo 'data berhasil ditambahkan';
      # code...
    }else {
    $error='Mohon dicek ulang';
    }
}

?>
<form class="form" action="" method="post">
	<table class="table-list" width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><b>Tambah Data Jenis Kecelakaan</b></td>
    </tr>
    <tr>
      <td>Jenis Kecelakaan</td>
      <td><b>:</b></td>
<td><input type="text" name="jenis_kecelakaan" value=""  size="40"></td>
</tr>
</table>
<button type="submit" name="submit" class="btn btn-primary">Save</button>

   <div ><?php echo $error;?></div><br>
</form>
<?php include_once "view2/footer.php"; ?>