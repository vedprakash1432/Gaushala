<?php
include ('./Config/functions.php');

if(isset($_GET['id'])){
   $id =$_GET['id'];

   global $db;

   $event_del ="DELETE FROM events WHERE id =:id";
   $stmt = $db->prepare($event_del);
   $stmt->bindValue(':id',$id);

   $Execute= $stmt->execute();

    if($Execute){
        echo "<script>alert('Event deleted successfully!')</script>";
        echo "<script> location.href='complete_event.php'; </script>";
        
    }else{
        echo "<script> location.href='complete_event.php'; </script>";

    }
}
  
?>