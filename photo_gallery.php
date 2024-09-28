<!-- Header  -->
<?php 
  include("./admin/Config/functions.php");
?>
<?php include('header.php'); ?>


<!-- Photo Gallery  -->

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">Photo Gallery</h1>
            <hr class="my-4">
            <div class="row mb-3">

                <div class="col all_gallery_images text-center">
                      <?php 
                       global $db;
                       $select_photos ="SELECT * FROM photos LIMIT 12";
                       $stmt =$db->query($select_photos);

                       while($Data =$stmt->fetch()){
                        $photo =$Data['Photos'];
                       
                       ?>
                        <img class="m-2 border-dark shadow-lg rounded img-thumbnail" src="./Upload/<?php echo htmlentities($photo)?>" alt="Image Missing">
                     <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- QR Model  -->
<?php include('qr_model.php'); ?>


<!-- Footer  -->

<?php include('footer.php'); ?>