<?php 
 include ('./Config/functions.php');

 if(isset($_POST['update'])){

    $admin_name =$_POST['name'];
    $admin_name =$_POST['name'];
    $admin_name =$_POST['name'];
    $admin_name =$_POST['name'];
    $admin_name =$_POST['name'];


 }
  
   global $db;

   $update ="UPDATE admin SET Admin_Name='$fname',Last_Name='$lname',Email='$email',Phone=$number,Image='$Image',Address='$address'  WHERE id=$UserId";

    
?>