<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete_adoption ="DELETE FROM cow_adoption WHERE id =:id";
    $stmt = $db->prepare($delete_adoption);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Adoption deleted successfully!')</script>";
         echo "<script> location.href='adoption.php'; </script>";        
     }else{
        echo "<script>alert('Adoption Not Delete!')</script>";
        echo "<script> location.href='adoption.php'; </script>"; 
     }

}
?>