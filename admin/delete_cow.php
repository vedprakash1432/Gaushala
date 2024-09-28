<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete_cow ="DELETE FROM cows WHERE id =:id";
    $stmt = $db->prepare($delete_cow);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Cow Deleted Successfully!')</script>";
         echo "<script> location.href='total_cows.php'; </script>";        
     }else{
        echo "<script>alert('Cow Not Delete!')</script>";
        echo "<script> location.href='total_cows.php'; </script>"; 
     }

}
?>