<?php include('header.php'); ?>
<?php include("./admin/Config/functions.php"); ?>


<!-- Cow category  -->

<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">Categories of Cow</h1>
            <hr class="my-4">
            <div class="row my-2 mb-3">
                <h1>
                    Categories :
                </h1>
                <hr>
                <?php
                   global $db;
                   $sql ="SELECT * FROM cow_category LIMIT 9";
                   $stmt =$db->query($sql);

                   while ($Datarow =$stmt->fetch()){
                    $id = $Datarow['id'];
                    $category =$Datarow['Category'];
                    $breed =$Datarow['Breed'];
                    $image =$Datarow['Image'];
                    $dob =$Datarow['DOB'];
                    $age =$Datarow['Age'];

                  
                 ?>
                <div class="col-md-4 mb-3">
                    <div class="card text-center border border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img style="height:250px;width:350px" src="./Upload/<?php echo htmlentities($image) ?>"  class="img-thumbnail" alt="">
                       <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span><?php echo $category?></span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span><?php echo $breed?></span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span><?php echo $dob?></span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span><?php echo $age?></span></p>
                            </div>
                           </div>
                          
                       </div>
                    </div>
                </div>
                <?php  }?>
                <!-- <div class="col-md-4">
                    <div class="card text-center border border-light border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img src="images/IMG_1072.JPG" alt="">
                       <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jercy</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-center border border-light border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img src="images/IMG_1072.JPG" alt="">
                       <div class="card-body">
                           <div class="row">
                            <div class="col">
                            <p>Category : <span>cow</span></p>
                            </div>
                            <div class="col">
                                <p>Breed : <span>jercy</span></p>
                            </div>
                           </div>
                           <div class="row">
                            <div class="col">
                            <p>DOB : <span>10/04/2001</span></p>
                            </div>
                            <div class="col">
                                <p>Age : <span>10</span></p>
                            </div>
                           </div>
                          
                       </div>
                    </div>
                </div>
                -->
                
            </div>
        </div>
    </div>
</div>

<!-- QR Model  -->
<?php include('qr_model.php'); ?>

<!-- Footer  -->

<?php include('footer.php'); ?>