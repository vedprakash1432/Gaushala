<?php include("./admin/Config/session.php"); ?>
<?php include("./admin/Config/functions.php"); ?>
<?php
include('header.php');
?>

<div class="container">
    <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow ">Completed Events</h1>
    <?php
           global $db;
           
           $select ="SELECT * FROM events";
           $stmt = $db->query($select);
           
           while($Data =$stmt->fetch()){
               
               $id =$Data['id'];
               $e_name =$Data['Event_Name'];
               $e_image =$Data['Event_Image'];
               $e_place =$Data['Event_Place'];
               $e_description =$Data['Event_description'];
               $e_startdate =$Data['Event_Start_Date'];
               $e_enddate =$Data['Event_End_Date'];
               
               ?>

    <hr class="my-4">
    <div class="row bg-light mb-3 p-3 border shadow">
        <div class="col-md-4">
            <img class="img-thumbnail m-2 border shadow-lg rounded" src="images/IMG_0958.JPG" alt="">
        </div>
        <div class="col-md-8">
            <h3 class="text-center"><?php echo $e_name; ?></h3>
            <p><?php echo $e_description; ?></p>
            <p>
            <?php echo $e_startdate; ?> - <?php echo $e_enddate; ?>
            </p>
            <strong><?php echo $e_place; ?> </strong>
        </div>
    </div>
    <?php  }?>
  
</div>

<!-- QR Model  -->
<?php include('qr_model.php'); ?>


<?php

// Footer 

include('footer.php');


?>