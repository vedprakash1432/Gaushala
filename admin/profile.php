<?php
// include ('./Config/functions.php');
include 'head_page.php';
?>
<?php

 global $db;
 
 $sql ="SELECT * FROM `admin`";
 $stmt =$db->query($sql);

 while($DataRow =$stmt->fetch()){

    $id         =$DataRow['id'];
    $Admin_Name =$DataRow['Admin_Name'];
    $Name       =$DataRow['Name'];
    $Image      =$DataRow['Image'];
    $Email      =$DataRow['Email'];
    $Number     =$DataRow['Number'];
    $Position   =$DataRow['Position'];
 }


?>
<?php
 if(isset($_POST['update'])){

    $image =$_FILES['image']['name'];
    $target ="../Upload/".basename($_FILES['image']['name']);
    $Name =$_POST['name'];
    $position =$_POST['position'];
    $email =$_POST['email'];
    $number  =$_POST['number'];
    global $db;

    $update_profile ="UPDATE admin SET Image='$image',Name='$Name',Email ='$email', Number='$number',Position='$position'";
    $stmt = $db->prepare($update_profile);

    $Execute =$stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$target);

    if($Execute){
        echo "<script>alert('Profile Updated Successfully!')</script>";
        echo "<script>location.href='profile.php'</script>";
    }else{
        echo "<script>alert('Profile Not Updated! try again!!!')</script>";
        echo "<script>location.href='profile.php'</script>";
    }


 }
  
?>
<div class="container-fluid m-0 p-0 p-4 border rounded shadow">
   
    <div class="row">
        <div class="edit_profile">
            <h1 class="text-center ">
                <i class="bi bi-person-bounding-box"></i>
                Admin Profile
            </h1>
            <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold float-end" data-bs-toggle="modal" data-bs-target="#editProfile" data-bs-whatever="@getbootstrap">
                <i class="bi bi-pencil"></i>
                Edit Profile
            </button>
            <div class="modal fade" id="editProfile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Edit Profile</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <label for="inputGroupFile02">Add Photos</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="file" class="form-control" name="image" id="inputGroupFile02"  value="<?php echo htmlentities($Image)?>">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control " id="inputGroupFile02" placeholder="Enter Your Name" value="<?php echo htmlentities($Name)?>">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope"></i></span>
                                    <input type="Email" class="form-control" name="email" id="inputGroupFile02" placeholder="Enter Your Email"  value="<?php echo htmlentities($Email)?>">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-phone"></i></span>
                                    <input type="Number" name="number" class="form-control" id="inputGroupFile02" placeholder="Enter Your Number"  value="<?php echo htmlentities($Number)?>">
                                </div>

                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-house"></i></span>
                                    <input type="position" name="position" class="form-control" id="inputGroupFile02" placeholder="Enter Your Position in this Organisation"  value="<?php echo htmlentities($Position)?>">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal"><i class="bi bi-x"></i> Close</button>
                                    <input type="submit"  name ="update" class="btn btn-warning" value="Update"/><i class="bi bi-pencil"></i>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mx-5">
        <div class="profile_image text-center">
            <img class="img-fluid img-responsive" src="../Upload/<?php echo htmlentities($Image)?>" alt="">
        </div>
        <div class="content text-center">
            <h3 class="my-2">
               <?php  echo ucfirst( $Name )?>
            </h3>
            <i class="text-secondary fw-bold"><?php  echo htmlentities(strtoupper($Position))?></i>
            <h5>
                <br>
                Email of Admin : <?php echo htmlentities($Email)?>
                <br>
                Number of Admin : <?php echo htmlentities($Number)?>
            </h5>
        </div>
    </div>
</div>

<?php
include 'footer_page.php';
?>