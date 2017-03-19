<?php
include_once "view2/header.php";
require_once "init.php";

$error='';
  if (isset($_POST['submit'])) {
    $nama =$_POST['txtnama'];
    $password =$_POST['txtpass'];
    $status =$_POST['cmbstatus'];
    if (tambah_user($nama,$password,$status)) {
      echo 'data berhasil ditambahkan';
      # code...
    }else {
    $error='judul dan konten wajib diisi';
    }
}

?>
<form class="form" action="" method="post">
	<table class="table-list" width="100%" border="0" cellpadding="3" cellspacing="1">
    <tr>
      <td colspan="3" bgcolor="#F5F5F5"><b>TAMBAH USER</b></td>
    </tr>
    
    <tr>
      <td>Username</td>
      <td><b>:</b></td>
      <td><input name="txtnama" type="text" value="" size="40" maxlength="100"> </td>
    </tr>
    <tr>
      <td>Password </td>
      <td><b>:</b></td>
      <td><input name="txtpass" type="text" value=" " size="9" maxlength="9"></td>
    </tr>
    <tr>
      <td> Status </td>
      <td><b>:</b></td>
      <td><select name="cmbstatus">
        <option value="KOSONG">....</option>
        <?php
		   $pilihan = array("Admin", "Non-Admin");
          foreach ($pilihan as $use) {
            if ($user==$use) {
                $cek="selected";
            } else { $cek = ""; }
            echo "<option value='$use' $cek>$use</option>";
          }
          ?>
      </select></td>
    </tr>
    
</table>
<button type="submit" name="submit" class="btn btn-primary">Save</button>

   <div ><?php echo $error;?></div><br>
</form>
<?php include_once "view2/footer.php"; ?>