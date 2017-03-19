<?php
include_once "view2/header.php";
require_once "init.php";

$error='';
  if (isset($_POST['submit'])) {
    $nama_lok     =$_POST['txt_namalok'];
    $id_kecamatan =$_POST['txt_idcamat'];
    $latitude     =$_POST['txt_latitude'];
    $longitude    =$_POST['txt_longitude'];
    if (tambah_lokasi($nama_lok,$id_kecamatan,$latitude,$longitude)) {
      echo 'data berhasil ditambahkan';
      # code...
    }else {
    $error='Mohon di cek ulang';
    }


}

?>
<form class="form" action="" method="post">
	<table class="table-list" width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><b>Tambah Data Lokasi</b></td>
    </tr>

    <tr>
      <td>Nama Lokasi</td>
      <td><b>:</b></td>
      <td><input name="txt_namalok" type="text" value=" " size="40" maxlength="100"> </td>
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
      <td>Latitude</td>
      <td><b>:</b></td>
      <td><input name="txt_latitude" type="text" value=" " size="40" maxlength="100"> </td>
    </tr>
     <tr>
      <td>Longitude</td>
      <td><b>:</b></td>
      <td><input name="txt_longitude" type="text" value=" " size="40" maxlength="100"> </td>
    </tr>

</table>
<button type="submit" name="submit" class="btn btn-primary">Save</button>

   <div ><?php echo $error;?></div><br>
</form>
<?php include_once "view2/footer.php"; ?>