<?php
session_start();
require_once "db.php";

function cek_nama($nama){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="select * from user where nama='$nama'";

	if($result=mysqli_query($link,$query)){
			if(mysqli_num_rows($result)==0)
				return true;

			else return false;
	}
}


function cek_data($nama,$password){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="select * from user where nama='$nama' and password='$password'";

	if($result=mysqli_query($link,$query)){
			if(mysqli_num_rows($result)!=0)
				return true;

			else return false;
	}
}


function tambah_jenis($jenis_kecelakaan){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="insert into kecelakaan values ('','$jenis_kecelakaan')";

	if($result=mysqli_query($link,$query)){
				return true;

	}else
	return false;
}


function tambah_user($nama,$password,$status){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="insert into user values ('','$nama','$password','$status')";

	if($result=mysqli_query($link,$query)){
				return true;

	}else
	return false;
}


function tambah_lokasi ($nama_lok,$id_kecamatan,$latitude,$longitude){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="insert into lokasi values ('','$nama_lok','$id_kecamatan','$latitude','$longitude')";

	if($result=mysqli_query($link,$query)){
				return true;

	}else
	return false;
}

function kecamatan (){
global $link;
$query="select * from kecamatan";
$result=mysqli_query($link,$query);
      if($result)
      {
      	 return $result; 
       }else{
       	return false;
       }


	}

function lokasi (){
global $link;
$query="select lokasi.id_lokasi, lokasi.nama_lokasi, kecamatan.nama_kecamatan, lokasi.latidude, lokasi.longitude
from lokasi,kecamatan
where lokasi.id_kecamatan=kecamatan.id_kecamatan";
$result=mysqli_query($link,$query);
      if($result)
      {
      	 return $result; 
       }else{
       	return false;
       }

}

function jenis(){
global $link;
$query="select * from kecelakaan";
$result=mysqli_query($link,$query);
      if($result)
      {
      	 return $result; 
       }else{
       	return false;
       }

}

function tambah_data ($no_lap,$tanggal,$kecamatan,$lokasi,$jenis,$lr,$lb,$md){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query="insert into data_kecelakaan values ('','$no_lap','$tanggal','$kecamatan','$lokasi','$jenis','$lr','$lb','$md')";

	if($result=mysqli_query($link,$query)){
				return true;

	}else
	return false;
}

function tampil_data(){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query = "SELECT data_kecelakaan.id_data, data_kecelakaan.no_lap,data_kecelakaan.tanggal,
 kecamatan.nama_kecamatan, lokasi.nama_lokasi, kecelakaan.jenis_kecelakaan, 
 lokasi.latidude,lokasi.longitude, data_kecelakaan.lr,data_kecelakaan.lb,data_kecelakaan.md 
 FROM data_kecelakaan,kecamatan,kecelakaan,lokasi
 WHERE data_kecelakaan.id_kecamatan=kecamatan.id_kecamatan and 
data_kecelakaan.id_lokasi=lokasi.id_lokasi and data_kecelakaan.id_jeniskec=kecelakaan.id_jeniskec";
$result =mysqli_query($link,$query);
 if($result)
      {
      	 return $result; 
       }else{
       	return false;
       }

}

function tampil_user(){
	$host='localhost';
	$user='root';
	$pass='';
	$db='lalu_lintas';

$link=mysqli_connect($host,$user,$pass,$db)or die(mysqli_error());
$query = "select from data_kecelakaan";
$result =mysqli_query($link,$query);
 if($result)
      {
      	 return $result; 
       }else{
       	return false;
       }

}

 ?>
