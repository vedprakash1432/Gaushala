<?php
include ('./Config/functions.php');

if(isset($_GET['id']))
{
    $id =$_GET['id'];

    global $db;

    $publish ="UPDATE events SET Publish_Status=1 WHERE id=$id";
    $stmt =$db->prepare($publish);

    $Execute =$stmt->execute();

    if($Execute){
        echo "<script>alert('Event published.')</script>";
        echo "<script> location.href='complete_event.php'; </script>";
        
    }
}
?>
