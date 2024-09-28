<!-- Header  -->
<?php include("./admin/Config/total.php"); ?>

<?php include('header.php'); ?>
<style>
    .cards-wrapper{
        display:flex;

    }
</style>
<div class="container-fluid">
    <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">About Branch</h1>
    <hr class="my-4">
    <div class="row border rounded mb-3 p-2">
        <div class="col-md-6 m-0 p-0">
            <div class="depart_image">
                <img class="img-fluid border rounded shadow m-0 p-0" src="./Images/about.jpeg" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <div class="depart_contant ps-4 pt-3">
                <h1 class="text-center text-primary">
                    About
                </h1>
                <h3>
                    (Number of cows 2000)
                </h3>
                <p>
                Shree Krishnayan Desi Gauraksha Evam Gaulok Dham Sewa Samiti’ is one of the largest Gaurakshashala of Desi cows in India. We protect, feed & shelter ailing, starving, destitute and stray Desi Cows & Bulls, the majority of which are abandoned by their owners or saved from butchers. Most of these Gauvansh are milk barren. These cows are brought to our Gaushala from tough conditions. All these cows are fed, sheltered,
                 and looked after by hundreds of Gausewaks who work round the clock.
                </p>
                <p>
                    A reservoir and manger have been constructed for Gau-mata (cows) both inside and outside the Khirak,
                    from which Gau-mata can have food and water whenever it wants.
                </p>
                <p>
                    An open space has been arranged so that the cows can get warmth from the sunlight during the day.
                </p>

            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
  <div class="mb-5">
    <h1 class="text-center text-dark">At A Glance</h1>
  </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card1 text-center">
                <h2 class="text-center">
                    <?php echo totalCows(); ?>
                </h2>
                <p class="text-center">
                    &nbsp;&nbsp;&nbsp;S K Gaushala <br> (Cows+Calf+Ox)
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card1 text-center">
                <h2 class="text-center">
                    <?php echo TotalComEvent(); ?>

                </h2>
                <p class="text-center">
                    &nbsp;&nbsp;&nbsp; S K Gaushala <br> ( Events )
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card1 text-center">
                <h2>
                    <?php echo TotalDonations(); ?>
                </h2>
                <p>
                    &nbsp;&nbsp;&nbsp; S K Gaushala <br> ( Donations )
                </p>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card1 text-center">
                <h2 class="text-center">
                    <?php echo TotalAdoptions(); ?>
                </h2>
                <p class="text-center">
                    &nbsp;&nbsp;&nbsp; S K Gaushala <br> ( Adoptions )
                </p>
            </div>
        </div>

    </div>
</div>
<!-- Photo Gallery  -->

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">Shree Krishna Gaushala Branch Gallery</h1>
            <hr class="my-4">
            <div class="row mb-3">

                <div class="col all_gallery_images text-center">
                    <?php 
                       global $db;
                       $select_photos ="SELECT * FROM photos WHERE Category='Branch Gaushala' LIMIT 6";
                       $stmt =$db->query($select_photos);

                       while($Data =$stmt->fetch()){
                        $photo =$Data['Photos'];
                       
                       ?>
                    <img class="m-2 shadow-lg rounded img-thumbnail" src="./Upload/<?php echo htmlentities($photo)?>"
                        alt="Image Missing">
                    <?php } ?>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- Gau Sewa -->
<div class="container">
    <div class="row mb-5">
        <div class="col">
            <h1 class="text-center mt-3 list-group-item-primary py-2 rounded border shadow">Gau Sewa</h1>
            <hr class="my-4">
            <div class="row my-2 mb-3">
                <div class="col-md-4 mb-3">
                    <div class="card text-center border border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img style="height:250px;width:350px" src="./Images/grass_eat.jfif"  class="img-thumbnail" alt="">
                       <div class="card-body">
                           <div class="row">                     
                            <b>Green Fodder</b>
                            <p>Mix of different types of fodder are being fed to Gauvansh. You can select the fodder type which you want to Feed.</p>
                           </div>                 
                       </div>
                    </div>
                    
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center border border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img style="height:250px;width:350px" src="./Images/cow_treatment.jpg"  class="img-thumbnail" alt="">
                       <div class="card-body">
                           <div class="row">                     
                            <p>Medical</p>
                            <p>As we shelter old & destitute gauvansh majorly saved from critical conditions. We regularly require medical help for these saved gauvansh so that they can live a happy life.</p>
                           </div>                 
                       </div>
                    </div>
                    
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center border border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img style="height:250px;width:350px" src="./Images/bran.jpeg"  class="img-thumbnail" alt="">
                       <div class="card-body">
                           <div class="row">                     
                            <p>Chokar -wheat Bran</p>
                            <p>The outer shell of wheat is called bran. It is a great source of fibre. Keeps the digestive system healthy.</p>
                           </div>                 
                       </div>
                    </div>
                    
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card text-center border border-2 p-1 shadow-lg bg-light my-2 all_cow_images">
                        <img style="height:250px;width:350px" src="./Images/khal.webp"  class="img-thumbnail" alt="">
                       <div class="card-body">
                           <div class="row">                     
                            <p>Khal -mustard Cake</p>
                            <p>The solid residue left after oil is extracted from mustard seeds.Good for health. It gives strength to cattle.</p>
                           </div>                 
                       </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
   <div class="cont_map">
        <iframe class="border shadow rounded mt-4" src="https://www.google.com/maps/embed?pb=!4v1720351596160!6m8!1m7!1sInMAsmGAFHMnn1TvzbG20g!2m2!1d28.65824193526247!2d77.41990430053741!3f320.83289848450534!4f-4.320358838886392!5f0.7820865974627469" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<!-- QR Model  -->
<?php include('qr_model.php'); ?>


<!-- Footer  -->

<?php include('footer.php'); ?>