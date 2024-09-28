<!-- Header  -->
<?php include("./admin/Config/functions.php"); ?>

<?php include('header.php'); ?>


<!-- About Us  -->
<div class="container-fluid">
    <div class="row">
        <h1 class="text-center mt-3 list-group-item-primary py-2">About Us</h1>
        <hr class="my-4">
    </div>
    <div class="container">
        <div class="row">
            <h1>
                About My Gaushala
            </h1>
            <h5>
                Animal care and kindness are important ways in which people can show their love for all the creatures of the God.
            </h5>
            <h5>
                Donation to Gaushala and Animals/Birds are made easier and online by MyGaushala application. On just one click www.mygaushala.com It makes you feel like just my own gaushala.
            </h5>
            <h5>
                Gaushalas are places where stray and abandoned animals can live in peace and happiness. A Gaushala is a place where people care for animals/birds.
            </h5>
            <h1 class="mt-4">
            Our Vision
            </h1>
            <h5>
            “MyGaushala” organisation application connects you with large number of gaushalas with one Click on its website. Jeevdaya Lovers can easily Donate just like any online shopping website. Along with Donor favorite choice of Cows, Goats, Dogs, Cats, Birds, etc.
            <br><br>
            Online “MyGaushala” provides facilities as follows:
            </h5>
            <ul class="list-group list-group-flush my-3 list-group-numbered">
              <li class="list-group-item">
              Simple and speedy Donation method from specific gaushala of your choice and location.
              </li>
              <li class="list-group-item">
              Donor can choose the favorite animal/bird with large number of list with pics of animal/bird.

              </li>
              <li class="list-group-item">
              Donated money directly gets transferred to bank account of Gaushala. No charges or commission recovered from donor or Gaushala.

              </li>
              <li class="list-group-item">
              Income tax deduction available as per applicable laws and receipt is issued directly by Gaushala as well as available for download on web site/mobile app.
              </li>
            </ul>
            <h5 class="mt-2">
            Reminder will be send to the donor on the event such as birthday, anniversary or donor added events.
            </h5>
            <h5 class="fw-bold mt-2">
            We believe that with your help, we can make a difference. Every little bit counts. No one deserves to be lonely, abused or farmed!
            </h5>
            <h5 class="fw-bold mt-2">
            Please Donate to gaushala and make a tremendous difference. Give a life of happiness, care and love to an animal and birds who deserves it!
            </h5>
        </div>
        <div class="row">
            <h1 class="text-center my-5 fw-bold">
            Our Team
            </h1>
            <hr class="fw-bold text-danger"> 
             <?php
              global $db;

              $select_team ="SELECT * FROM team ORDER BY `id` ASC";
              $stmt =$db->query($select_team);

              while($Data = $stmt->fetch()){
                $id =$Data['id'];
                $Name =$Data['Name'];
                $Image =$Data['Image'];
                $Position =$Data['Position'];
                $date_time =$Data['Date&Time'];
               
             
             ?>
            <div class="col-md-4 mb-3">
                <div class="card about_card shadow my-2">
                    <div class="card-body">
                        <img style="height:250px;width:400px;" src="./Upload/<?php echo htmlentities($Image)?>" class="card-img-bottom img-thumbnail rounded" alt="...">
                        <div class="card_content px-2">
                            <h3 class="card-title mt-2"><?php echo htmlentities($Name)?></h3>
                            <h6 class="card-subtitle mb-2 text-muted"><?php echo htmlentities($Position)?></h6>
                        </div>
                    </div>
                </div>
            </div>
          <?php }
            ?>
           
        </div>
    </div>
</div>


<!-- QR Model  -->
<?php include('qr_model.php'); ?>



<!-- Footer  -->

<?php include('footer.php'); ?>