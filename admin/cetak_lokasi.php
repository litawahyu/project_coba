<?php

include_once "init.php";

$datalokasi=lokasi();
?>
<html>
<head>
<title> :: Laporan Cetak Data Lokasi:</title>
<link href="../css/stylecetak.css" rel="stylesheet" type="text/css">
</head>
<body>
<h2> LAPORAN DATA LOKASI </h2>
<table class="table-list" width="600" border="0" cellspacing="1" cellpadding="2">
  <tr>
    
    <td width="81" bgcolor="#F5F5F5"><b>ID Lokasi</b></td>
    <td width="321" bgcolor="#F5F5F5"><b>Nama Lokasi</b></td>
    <td width="146" bgcolor="#F5F5F5"><b>Nama Kecamatan</b></td>
    <td width="321" bgcolor="#F5F5F5"><b>Latitude</b></td>
    <td width="146" bgcolor="#F5F5F5"><b>Longitude</b></td>
  </tr>
  <?php while($row=mysqli_fetch_assoc($datalokasi)):?>
              <tr>
                <td><?php echo $row['id_lokasi']?></td>
                <td><?php echo $row['nama_lokasi']?></td>
                 <td><?php echo $row['nama_kecamatan']?></td>
                <td><?php echo $row['latidude']?></td>
                 <td><?php echo $row['longitude']?></td>
              
               
               
              </tr> <?php endwhile; ?>
</table>
<img src="../img/cetak.png" width="50" onClick="javascript:window.print()" />
</body>
</html>
