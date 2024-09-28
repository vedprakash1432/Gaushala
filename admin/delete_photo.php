<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete_photo ="DELETE FROM photos WHERE id =:id";
    $stmt = $db->prepare($delete_photo);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Photo deleted successfully!')</script>";
         echo "<script> location.href='photos.php'; </script>";        
     }else{
        echo "<script>alert('Photo Not Delete!')</script>";
        echo "<script> location.href='photos.php'; </script>"; 
     }

}
?>