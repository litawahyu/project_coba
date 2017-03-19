<?php
require_once "../core/init.php";
$query= "SELECT * FROM data_kecelakaan";
global $link;
$Q = mysqli_query($link,$query)or die(mysqli_error());
if($Q){
 $posts = array();
      if(mysqli_num_rows($Q))
      {
             while($post = mysqli_fetch_assoc($Q)){
                     $posts[] = $post;
             }
      }  
      $data = json_encode(array('results'=>$posts));
      echo $data;                     
}

?>