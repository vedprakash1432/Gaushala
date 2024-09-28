<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $delete ="DELETE FROM contact_us WHERE id =:id";
    $stmt = $db->prepare($delete);
    $stmt->bindValue(':id',$id);
 
    $Execute= $stmt->execute();
 
     if($Execute){
         echo "<script>alert('Contact Message deleted successfully!')</script>";
         echo "<script> location.href='contact_us.php'; </script>";        
     }else{
        echo "<script>alert('Contact Not Delete!')</script>";
        echo "<script> location.href='contact_us.php'; </script>"; 
     }

}
?>