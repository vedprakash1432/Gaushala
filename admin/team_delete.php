<?php
include ('./Config/functions.php');
 if(isset($_GET['id'])){
     $id =$_GET['id'];
 } 

 global $db;
 $update_team ="DELETE FROM team WHERE id=:id"; 
 $stmt =$db->prepare($update_team);
 $stmt->bindValue(':id',$id);

 $Execute= $stmt->execute();

    if($Execute){
        echo "<script>alert('Team deleted successfully!')</script>";
        echo "<script> location.href='our_team.php'; </script>";
        
    }else{
        echo "<script>alert('Team not deleted!')</script>";
        echo "<script> location.href='our_team.php'; </script>";

    }
?>