<?php
include 'head_page.php';
include ('./Config/functions.php');
include ('./Config/total.php');


?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-image"></i>
                All Photos- 
                <span class="badge bg-secondary rounded-circle">
                    <?php TotalPhotos()?>
                </span>
            </h1>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Category</th>
                        <th scope="col">Added By</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                       global $db;

                       $select_photos ="SELECT * FROM photos";
                       $stmt =$db->query($select_photos);
                       $sr=0;
                       while($Data =$stmt->fetch()){

                        $id =$Data['id'];
                        $photo =$Data['Photos'];
                        $category =$Data['Category'];
                        $addedby =$Data['Added_by'];
                        $datetime =$Data['Date&Time'];
                        $sr++;
                     ?>
                    <tr class="">
                        <td scope="row"><?php echo htmlentities($sr);?></td>
                        <td><img style="height: 70px; width: 120px;" class="rounded img-thumbnail" src="../Upload/<?php echo htmlentities($photo);?>" alt=""></td>
                        <td ><?php echo htmlentities(ucfirst($category));?></td>
                        <td ><?php echo htmlentities(strtoupper($addedby));?></td>
                        <td>
                            <span>
                                <a href="delete_photo.php?id=<?php echo $id; ?>">
                                    <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure! Do you want to delete Photo?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i> Delete</button>
                                </a>
                            </span>
                            <span>

                               <a href="photo_update.php?id=<?php echo $id ?>">
                                 <button type="button" class="btn btn-warning" onclick="return confirm('Are you sure! Do you want to Update Photo?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i> Update</button>
                                </a>
                            </span>
                        </td>
                    </tr>
                <?php }?>
                   
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>