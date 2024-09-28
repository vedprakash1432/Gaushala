<?php
include ('./Config/functions.php');
?>

<?php
    if(isset($_GET['id'])){
        $id =$_GET['id'];
    }

    global $db;

    $select_update ="SELECT * FROM cow_category WHERE id=$id ORDER BY `id` ASC";
    $stmt = $db->query($select_update);

    while($data =$stmt->fetch()){
    $id =$data['id'];
    $Image =$data['Image'];
    $Batch_Id =$data['Batch'];
    $Breed =$data['Breed']; 
    $Category =$data['Category'];
    $Cow_DOB =$data['DOB'];
    $Amount =$data['Amount'];
    }
    ?>

<?php
    if(isset($_POST['updateBreed'])){
        $image     =$_FILES['image']['name'];
        $target    ="../Upload/".basename($_FILES['image']['name']);
        $batch     =$_POST['batch'];
        $breed     =$_POST['breed'];
        $category  =$_POST['category'];
        $dob       =$_POST['dob'];
        $Amount    =$_POST['amount'];

        global $db;
        $Update_Breed ="UPDATE cow_category SET Image='$image',Batch='$batch',Breed='$breed',Category='$category',DOB='$dob',Amount='$Amount' WHERE id=$id";
   
    
        $stmt =$db->prepare($Update_Breed); 

        $Execute =$stmt->execute();
        move_uploaded_file($_FILES['image']['tmp_name'],$target);
        if($Execute){
            echo "<script>alert('Breed Updated successfully')</script>";
            echo "<script> location.href='total_breeds.php'; </script>";
            exit;

        }else{
            echo "<script>alert('something went wrong')</script>";
            echo "<script> location.href='total_breeds.php'; </script>";
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
                    <h3>Update Breed</h3>
            </div>
            <hr class="text-danger mb-3"  >
            <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="" class="form-label">Select Cow Image</label>
                        <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId" Required />
                    </div>
                   
                    <div class="mb-3">
                        <label for="">Batch Id</label>
                        <input type="number" name="batch" value="<?php echo htmlentities($Batch_Id) ?>" class="form-control" placeholder="Enter Batch id" aria-describedby="helpId" Required/>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-bookmark-check"></i></label>
                        <select class="form-select" name="breed" id="inputGroupSelect01" value=""Required>
                            <option selected><?php echo htmlentities($Breed)?></option>
                            <option value="JERSEY COW">JERSEY COW</option>
                            <option value="BROWN SWISS">BROWN SWISS</option>
                            <option value="GUERNSEY">GUERNSEY</option>
                            <option value="AYRSHIRE">AYRSHIRE</option>
                            <option value="RED AND WHITE HOLSTEIN">RED AND WHITE HOLSTEIN</option>
                            <option value="MILKING SHORTHORN">MILKING SHORTHORN</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-bookmark-check"></i></label>
                        <select class="form-select" name="category" id="inputGroupSelect01" Required>
                            <option selected><?php echo htmlentities($Category) ?></option>
                            <option value="COW">COW</option>
                            <option value="OX">OX</option>
                            <option value="CALF">CALF</option>
                            <option value="OTHERS">OTHERS</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        
                        <input type="calendar" name="dob" value="<?php echo htmlentities($Cow_DOB) ?>" class="form-control" placeholder="Enter Cow DOB" aria-describedby="helpId" Required/>
                    </div>
                    <div class="mb-3">
                        
                        <input type="number" name="amount" value="<?php echo htmlentities($Amount) ?>" class="form-control" placeholder="Enter Amount" aria-describedby="helpId" Required />
                    </div>
                    <div class="modal-footer">
                        <a href="total_cows.php"><button type="button" class="btn btn-danger mx-3" data-bs-dismiss="modal">Back to Cow Page</button></a>
                        <input type="submit" name="updateBreed" class="btn btn-primary" value="Update Breed"/>
                    </div>
                </form>
            </div>
            <div class="col"></div>
        </div>        
    
   </div>
</body>
</html>