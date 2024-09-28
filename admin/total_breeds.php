<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>
<?php 
 if(isset($_POST['addbreed'])){
    $Image =$_FILES['image']['name'];
    $target ="../Upload/".basename($_FILES['image']['name']);
    $Breed =$_POST['breed'];
    $Category =$_POST['category'];
    $Batch_Id =$_POST['batch'];
    $DOB     =$_POST['dob'];
    $amount     =$_POST['amount'];

    global $db;
    $insert_breed ="INSERT INTO cow_category(Category,Breed,Batch,Image,DOB,Amount)";
    $insert_breed .="VALUES(:category,:breed,:batch,:image,:dob,:amount)";

    $stmt =$db->prepare($insert_breed);
    //  print_r($stmt);
    //  die();
    $stmt->bindValue(':category',$Category);
    $stmt->bindValue(':breed',$Breed);
    $stmt->bindValue(':batch',$Batch_Id);
    $stmt->bindValue(':image',$Image);
    $stmt->bindValue(':dob',$DOB);
    $stmt->bindValue(':amount',$amount);

    $Execute =$stmt->execute();

    if($Execute){
        echo "<script>alert('Breed Added Successfully.')</script>";  
        echo "<script>location.href='total_breeds.php'</script>";  

    }
 }
?>
<div class="container-fluid m-0 p-0">
    <div class="row">
       <div class="col">
        <h1 class="list-group-item-warnning">
            <i class="bi bi-calendar-event-fill"></i>
            Total Breeds -
            <span class="badge bg-secondary rounded-circle">
                 <?php totalBreeds() ?>
            </span>
        </h1>
</div>
<div class="col">
           <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold float-end" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@getbootstrap">
                <i class="bi bi-plus-lg"></i>
                Add Breed
            </button>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add Breed</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- add breed  -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="text"  class="form-control" name="breed" placeholder="Enter Breed" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="text"  class="form-control" name="batch" placeholder="Enter Batch Id" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="text"  class="form-control" name="category" placeholder="Enter Category" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="file"  class="form-control" name="image" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="date"  class="form-control" name="dob" placeholder="Enter DOB" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="number"  class="form-control" name="amount" placeholder="Enter Amount" id="inputGroupFile02">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="addbreed" class="btn btn-primary" value="Add Breed"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="table-responsive upcoming_table">
            <table class="table table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Cow Image</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Batch Id</th>
                        <th scope="col">Category</th>
                        
                        <th scope="col">DOB</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                      global $db;

                      $select_event ="SELECT * FROM cow_category ORDER BY `id` ASC";
                      $stmt = $db->query($select_event);
                      $sr =0;
                      while($data =$stmt->fetch()){
                        $id =$data['id'];
                        $Image =$data['Image'];
                        $Batch_Id =$data['Batch'];
                        $Breed =$data['Breed'];
                        $Category =$data['Category'];
                        $Cow_DOB =$data['DOB'];
                        $amount =$data['Amount'];
                        $sr++;
                     ?>
                    <tr class="text-center p-1">
                       <td scope="row"><?php echo $sr?></td>
                        <td><img style="height: 70px; width: 120px;" class="rounded img-thumbnail" src="../Upload/<?php echo htmlentities($Image)?>" alt=""></td>
                        <td class="text-dark fw-bold"><?php echo htmlentities(strtoupper($Breed))?></td>
                        <td ><?php echo ucfirst($Batch_Id)?></td>
                        <td ><?php echo htmlentities($Category)?></td>
                       
                        <td><?php echo htmlentities($Cow_DOB)?></td>
                        <td class="text-info fw-bold">$<?php echo htmlentities($amount)?></td>
                        <td>
                            <span><a href="breed_delete.php?id=<?php echo $id?>">
                                <button type="button" onclick="return confirm('Are you sure! Do you want to delete this item?');" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
                            <span><a href="breed_update.php?id=<?php echo $id?>">
                                <button type="button" onclick="return confirm('Are you sure! Do you want to update this item?');" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i></button>
                            </a></span>
                        </td>
                       
                    </tr>
                 <?php   }?>
                  
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>