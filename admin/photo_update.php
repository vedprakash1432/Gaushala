<?php
include ('./Config/functions.php');
?>
<?php 
  if(isset($_GET['id'])){
     $id =$_GET['id'];
  }
    global $db;

    $select_photos ="SELECT * FROM photos WHERE id =$id";
    $stmt =$db->query($select_photos);

    while($Data =$stmt->fetch()){

  
    $photo =$Data['Photos'];
    $addedby =$Data['Added_by'];
    
    }
?>
<?php
if(isset($_POST['update'])){

    $image =$_FILES['image']['name'];
    $added_by =$_POST['addedby'];
    $target = "../Upload/".basename($_FILES['image']['name']);

    global $db;

    $Update_photo ="UPDATE photos SET Photos='$image',Added_by='$added_by' WHERE id=$id";
   
    
    $stmt =$db->prepare($Update_photo); 

    $Execute =$stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    if($Execute){
        echo "<script>alert('Photo Updated successfully')</script>";
        echo "<script> location.href='photos.php'; </script>";
    exit;

    }else{
        echo "<script>alert('something went wrongg')</script>";
        echo "<script> location.href='photos.php'; </script>";
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
                    <h3>Update Photo</h3>
            </div>
            <hr class="text-danger mb-3"  >
            <form action="" method="post" enctype="multipart/form-data">
               
               <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                    <input type="File" name="image" id="" class="form-control" value="<?php echo htmlentities($photo)?>" aria-describedby="helpId" />
                </div>
                <div class="mb-3 input-group">
                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-event"></i></span>
                    <input type="text" name="addedby" id="" class="form-control" value="<?php echo htmlentities($addedby)?>" placeholder=" Enter Name added by" aria-describedby="helpId" />
                </div>
                  
                <div class="modal-footer">
                    <a href="photos.php"><button type="button" class="btn btn-danger mx-3" data-bs-dismiss="modal">Back To Dashboard</button></a>
                    <input type="submit" name="update" class="btn btn-primary" value="Update Photo"/>
                </div>
            </form> 
            </div>
            <div class="col"></div>
        </div>        
    
   </div>
</body>
</html>