<!DOCTYPE html>
<html >
<?php

require_once "function/user.php";
if($_SESSION['user']){
                      
    header('Location:admin/index.php');

  }else{

if (isset($_POST['submit'])){
        $nama=$_POST['nama'];
        $password=$_POST['password'];
       
     

       if (cek_data($nama,$password)) {
                      //session
         $_SESSION['user']=$nama;
         header('Location:admin/index.php');
         }else{
           echo "USERNAME ATAU PASSWORD SALAH";
          }
        
}
include_once "view/header.php";

 ?>
<body>

  <div class="login">
    <h1 class="bold" align="center">Login</h1>

    <form class="form" method="post" >
      <table align="center">
      <p class="field" align="center">
        <input type="text" name="nama" placeholder="Username" required/>
        <i class="fa fa-user"></i>
      </p>

      <p class="field" align="center">
        <input type="password" name="password" placeholder="Password" required/>
        <i class="fa fa-lock"></i>
      </p>

      <p class="submit" align="center"><input type="submit" name="submit" value="Login"></p>


    </form>
  </div> <!--/ Login-->


</body>
  <?php include_once "view/footer.php"; ?>
<?php } ?>