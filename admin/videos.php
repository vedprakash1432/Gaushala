<?php
include ('./Config/functions.php');
include 'head_page.php';
?>
<?php
//if(isset($_POST['addvideo'])){

    // $image =$_FILES['image']['name'];
    
    // $added_by =$_POST['Added_by'];
    // $target = "../Upload/".basename($_FILES['image']['name']);

    // global $db;

    // $insert_photo ="INSERT INTO video(Videos,Added_by)";
    // $insert_photo .="VALUES(:photo,:addedby)";
    
    // $stmt =$db->prepare($insert_photo); 
    // $stmt->bindValue(':photo',$image);
    // $stmt->bindValue(':addedby',$added_by);
   
    // $Execute =$stmt->execute();
    // move_uploaded_file($_FILES['image']['tmp_name'],$target);
    // if($Execute){
    //     echo "<script>alert('Photo Added Successfully')</script>";
    //     echo "<script> location.href='photos.php'; </script>";
    // exit;

    // }else{
    //     echo "Something went wrong, try again?";
    //     echo "<script> location.href='dashboard.php'; </script>";
    // }

// }

?>


<div class="container-fluid m-0 p-0">
    <div class="row">
        <h1 class="list-group-item-warnning">
            <i class="bi bi-image"></i>
            All Videos
            <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold float-end" data-bs-toggle="modal" data-bs-target="#exampleModal4" data-bs-whatever="@getbootstrap">
                <i class="bi bi-plus-lg"></i>
                Add Vodeos
            </button>
            <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModal4" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add video</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- add videos  -->
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="file"  class="form-control" name="image" placeholder="enter video" id="inputGroupFile02">
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                    <input type="text"  class="form-control" name="Added_by" placeholder="Video Added By" id="inputGroupFile02">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                    <input type="submit" name="addvideo" class="btn btn-primary" value="Add video"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </h1>
        <div class="table-responsive upcoming_table">
            <table class="table table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Videos</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Update</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td><h4 class="text-center text-danger"> Video NOT Available</h4></td>
                        <!-- <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i> Delete</button></td>
                        <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i> Update</button></td> -->
                    </tr>
                    
                   
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>