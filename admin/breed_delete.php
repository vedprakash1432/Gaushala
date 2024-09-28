<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete_breed ="DELETE FROM cow_category WHERE id =:id";
    $stmt = $db->prepare($delete_breed);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Breed Deleted Successfully!')</script>";
         echo "<script> location.href='total_breeds.php'; </script>";        
     }else{
        echo "<script>alert('Breed Not Delete!')</script>";
        echo "<script> location.href='total_breeds.php'; </script>"; 
     }

}
?>