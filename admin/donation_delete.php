<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete_donation ="DELETE FROM donations WHERE id =:id";
    $stmt = $db->prepare($delete_donation);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Donation deleted successfully!')</script>";
         echo "<script> location.href='donation.php'; </script>";        
     }else{
        echo "<script>alert('Donation Not Delete!')</script>";
        echo "<script> location.href='donation.php'; </script>"; 
     }

}
?>