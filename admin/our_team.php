<?php
include 'head_page.php';
include ('./Config/functions.php');
include ('./Config/total.php');

include_once ('./Config/session.php');

?>
<?php 
  if(isset($_POST['addteam'])){
    $name =$_POST['name'];
    $image =$_FILES['image']['name'];
    $target ="../Upload/".basename($_FILES['image']['name']);
    $position =$_POST['position'];

    global $db;
    
    $insert_team ="INSERT INTO team(Name,Image,Position)";
    $insert_team .="VALUES(:name,:image,:position)";
    $stmt =$db->prepare($insert_team);

    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':image',$image);
    $stmt->bindValue(':position',$position);

    $Execute =$stmt->execute();
     move_uploaded_file($_FILES['image']['tmp_name'],$target);

    if($Execute){
       $_SESSION['SuccessMessage'] ="Position added successfully.";
        echo "<script>location.href='our_team.php'; </script>";
    }else{
       $_SESSION['ErrorMessage']="Position not added?";
        // echo "<script>location.href='our_team.php'; </script>";
    }


  }
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <?php
                echo SuccessMessage();
                echo ErrorMessage(); 
         ?>
        <div class="add_team d-flex align-items-center justify-content-between">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-gem"></i>
                Total Team Members - 
                <span class="badge bg-secondary rounded-circle">
                        <?php TotalTeam() ?>
                    </span>
            </h1>
            <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal9" data-bs-whatever="@getbootstrap">
                <i class="bi bi-plus-lg"></i>
                Add Team
            </button>
            
            <div class="modal fade" id="exampleModal9" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add Team</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- add Image  -->
                                <label for="inputGroupFile02">Add Profile Image</label>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="file" name="image" class="form-control" id="inputGroupFile02">
                                </div>
                                <!-- add name -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-person"></i></span>
                                    <input type="text" name="name" class="form-control" placeholder="Enter Name of the Person" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <!-- add position -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-cursor"></i></span>
                                    <input type="text" name="position" class="form-control" placeholder="Enter Position" aria-label="Username" aria-describedby="basic-addon1">
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="addteam" class="btn btn-primary" value="Add Team"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-primary table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Profile Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Position</th>
                        <th scope="col">Action</h>
                        
                    </tr>
                </thead>
                <tbody>
                     <?php
                      global $db;

                      $select_team ="SELECT * FROM team ORDER BY `id` ASC";
                      $stmt = $db->query($select_team);
                      $sr =0;
                      while($data =$stmt->fetch()){

                        $id =$data['id'];
                        $Name =$data['Name'];
                        $Image =$data['Image'];
                        $Position =$data['Position'];
                        $Date_Time =$data['Date&Time'];
                        $sr++;
                     ?>
                    <tr class="">
                        <td scope="row"><?php echo $sr?></td>
                        <td>
                            <div class="profile_image">
                                <img style="height: 70px; width: 70px;" class="rounded-circle img-fluid img-thumbnail" src="../Upload/<?php echo htmlentities($Image)?>" alt="image missing">
                            </div>
                        </td>
                        <td><?php echo strtoupper($Name) ?></td>
                        <td><?php echo ucfirst($Position)?></td>
                        <td>
                           <span><a href="team_delete.php?id=<?php echo $id?>">
                             <button type="button"  onclick="return confirm('Are you sure! Do you want to delete?');" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
                           <span><a href="team_update.php?id=<?php echo $id?>">
                             <button type="button" onclick="return confirm('Are you sure? Do you want to update team')" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                            </span> 
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>