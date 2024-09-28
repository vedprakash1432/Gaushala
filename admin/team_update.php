<?php
include ('./Config/functions.php');
    if(isset($_GET['id'])){
        $id =$_GET['id'];
    }

    global $db;

    $select_team ="SELECT * FROM team WHERE id=$id ORDER BY `id` ASC ";
    $stmt = $db->query($select_team);

    while($data =$stmt->fetch()){

        $Name =$data['Name'];
        $Image =$data['Image'];
        $Position =$data['Position'];
  
    }    
?>
<?php
if(isset($_POST['updateteam'])){
    $name =$_POST['name'];
    $image =$_FILES['image']['name'];
    $target ="../Upload/".basename($_FILES['image']['name']);
    $position =$_POST['position'];

    global $db;
    $update_team ="UPDATE team SET Name='$name',Image='$image',Position='$position' WHERE id=$id ";
    $stmt =$db->prepare($update_team);
    $Execute =$stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    if($Execute){
        echo "<script>alert('Team Updated successfully')</script>";
        echo "<script> location.href='our_team.php'; </script>";

    }else{
        echo "<script>alert('Team not Update??? ')</script>";
        echo "<script> location.href='our_team.php'; </script>";

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
                    <h3>Update Team</h3>
            </div>
            <hr class="text-danger mb-3"  >

<form action="" method="post" enctype="multipart/form-data">
    <!-- add Image  -->
    <label for="inputGroupFile02">Add Profile Image</label>
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
        <input type="file" name="image" class="form-control" value="<?php echo htmlentities($Image);?>" id="inputGroupFile02">
    </div>
    <!-- add name -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
        <input type="text" name="name" class="form-control" value="<?php echo htmlentities($Name);?>" placeholder="Enter Name of the Person" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <!-- add position -->
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><i class="bi bi-cursor"></i></span>
        <input type="text" name="position" class="form-control" value="<?php echo htmlentities($Position);?>" placeholder="Enter Position" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="modal-footer">
        <a href="our_team.php"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Bact To Team Page</button></a>
        <input type="submit" name="updateteam" class="btn btn-primary" value="Update Team"/>
    </div>
</form>
</div>
        <div class="col"></div>
    </div>        
   </div>
</body>
</html>