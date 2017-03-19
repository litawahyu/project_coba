<?php
include "function/db.php";
$query= "SELECT * FROM lokasi";
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