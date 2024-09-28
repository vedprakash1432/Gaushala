<?php 
  include ('./Config/functions.php'); 
?>
<!-- fetching data from event table for update -->
<?php 
  if(isset($_GET['id'])){
    $id =$_GET['id'];

    global $db;

    $select="SELECT * FROM events WHERE id =$id";
    $stmt =$db->query($select);
    while($data =$stmt->fetch()){
        
        $name =$data['Event_Name'];
        $Event_Image = $data['Event_Image'];
        $Date = $data['Date'];
        $start_time = $data['Event_start_time'];
        $end_time = $data['Event_end_time'];
        $description =$data['Event_description'];
    }
  }
?>

<?php
  if(isset($_POST['update'])){
    $image =$_FILES['image']['name'];
    $event_name =$_POST['event_name'];
    
    $event_date =$_POST['date'];

    $start_time =$_POST['stime'];
    $end_time =$_POST['etime'];
    $description =$_POST['description'];
    $target = "../Upload/".basename($_FILES['image']['name']);
     
    global $db;

    $update_event ="UPDATE events SET Event_Name='$event_name',Event_Image='$image',Date='$Date',Event_start_time='$start_time',Event_end_time='$end_time',Event_description='$description' WHERE id=$id";
    $stmt =$db->prepare($update_event);
    $Execute =$stmt->execute();
    if($Execute){
        echo "<script>alert('Event Updated successfully')</script>";
        // $_SESSION['SuccessMessage'] ="Event Updated Successfully.";
        echo "<script> location.href='upcoming_event.php'; </script>";

    }else{
        echo "<script>alert('Event not Update??? ')</script>";
        // $_SESSION['ErrorMessage'] ="Event Not Updated, try again!!";
        echo "<script> location.href='upcoming_event.php'; </script>";

    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="contaner">
        <div class="row mt-3">
            <div class="col"></div>
            <div class="col p-3 border border-info rounded bg-light">
            <div class="text-center mb-3 text-primary">
                    <h3>Update Your Event</h3>
            </div>
            <hr class="text-danger mb-3"  >
            <form action="" method="post" enctype="multipart/form-data">
               
               <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                    <input type="File" name="image" id="" class="form-control" value="<?php echo htmlentities($Event_Image)?>" aria-describedby="helpId" />
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-event"></i></span>
                    <input type="text" name="event_name" id="" class="form-control" value="<?php echo htmlentities($name)?>" placeholder=" Enter Event Name of Event" aria-describedby="helpId" />
                </div>
                <!-- date  -->
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                    <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" value="<?php echo htmlentities($Date)?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>
                <!-- Start Time  -->
                <label for="inputGroupSelect01">Select Start Time of Event</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                    <input type="time" name="stime" class="form-control" placeholder="dd/mm/yyyy" value="<?php echo htmlentities($start_time)?>" aria-label="Username" aria-describedby="basic-addon1">
                </div>

                <!-- End Time  -->
                <label for="inputGroupSelect01">Select End Time of Event</label>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                    <input type="time" name="etime" class="form-control" placeholder="dd/mm/yyyy" aria-label="Username" value="<?php echo htmlentities($end_time)?>" aria-describedby="basic-addon1">
                </div>

                <!-- Event Description  -->
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-file-earmark-text"></i></span>
                    <textarea class="form-control" name="description" id="" rows="3" placeholder="<?php echo $description?>"></textarea>
                </div>

                <div class="modal-footer">
                    <a href="dashboard.php"><button type="button" class="btn btn-danger mx-3" data-bs-dismiss="modal">Back To Dashboard</button></a>
                    <input type="submit" name="update" class="btn btn-primary" value="Update Event"/>
                </div>
            </form> 
            </div>
            <div class="col"></div>
        </div>        
    
   </div>
</body>
</html>