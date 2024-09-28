<?php
include ('./Config/functions.php');

if(isset($_POST['event'])){

    $image =$_FILES['image']['name'];
    $event_name =$_POST['event_name'];
    $event_date =$_POST['date'];

    $start_time =$_POST['stime'];
    $end_time =$_POST['etime'];
    $description =$_POST['description'];
    $target = "../Upload/".basename($_FILES['image']['name']);

    global $db;

    $insert_event ="INSERT INTO events(Event_Name,Event_Image,Date,Event_start_time,Event_end_time,Event_description)";
    $insert_event .="VALUES(:ename,:image,:date,:stime,:etime,:description)";
    
    $stmt =$db->prepare($insert_event);
    // print_r($stmt);
    // die();
    $stmt->bindValue(':ename',$event_name);
    $stmt->bindValue(':image',$image);
    $stmt->bindValue(':date',$event_date);
    $stmt->bindValue(':stime',$start_time);
    $stmt->bindValue(':etime',$end_time);
    $stmt->bindValue(':description',$description);

    $Execute =$stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    if($Execute){
      echo "<script>alert('Event added successfully')</script>";
      echo "<script> location.href='upcoming_event.php'; </script>";
    exit;

    }else{
      echo "some went wrongg";
      echo "<script> location.href='upcoming_event.php'; </script>";

    }

}
?>
