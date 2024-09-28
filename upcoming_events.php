<?php
 include("./admin/Config/functions.php");

// Header 

include('header.php');

?>

<div class="container">
    <div class="row">
        <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">
            Upcoming Events
        </h1>
        <hr class="my-4">
        <?php
           global $db;
           
           $select ="SELECT * FROM events WHERE Publish_Status=0";
           $stmt = $db->query($select);
           
           while($Data =$stmt->fetch()){
               
               $id =$Data['id'];
               $e_name =$Data['Event_Name'];
               $e_image =$Data['Event_Image'];
               $Date =$Data['Date'];
               $e_starttime =$Data['Event_start_time'];
               $e_endtime =$Data['Event_end_time'];
               $e_description =$Data['Event_description'];
               
               ?>

    <hr class="my-4">
    <div class="row bg-light mb-3 p-3 border shadow">
        <div class="col-md-4">
            <img class="img-thumbnail m-2 border shadow-lg rounded" src="./Upload/<?php echo htmlentities($e_image)?>" alt="">
        </div>
        <div class="col-md-8">
            <h3 class="text-center"><?php echo $e_name; ?></h3>
            <p><?php echo htmlentities(substr($e_description,0,60)) ?></p>
            <p>
            Event Start/End Time : <b><?php echo $e_starttime; ?></b> --- <b><?php echo $e_endtime; ?></b>
            </p>
            <strong><?php echo $Date; ?> </strong>
        </div>
    </div>
    <?php  }?>
    </div>
</div>


<!-- QR Model  -->
<?php include('qr_model.php'); ?>

<?php

// Footer 

include('footer.php');


?>