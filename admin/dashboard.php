<?php
include ('./Config/functions.php');
include ('./Config/total.php');
// require_once('./Config/session.php');
include 'head_page.php';
?>
<?php
  global $db;
  $sql ="SELECT * FROM admin";
  $stmt =$db->query($sql);
  
  while($Data =$stmt->fetch()){
    $Admin_Name =$Data['Admin_Name'];
    $Image =$Data['Image'];
    $Email =$Data['Email'];
    $Number =$Data['Number'];
    $Position =$Data['Position'];
    $Admin_Bio =$Data['Admin_Bio'];

  }
?>

<div class="row">
    <div class="col-md-4">
        <div class="card p-2">
            <?php
              echo SuccessMessage();
              echo ErrorMessage();
             ?>
            <h3 class="text-primary fw-bold">
                Owner of Gaushala
            </h3>
            <hr class="m-0 p-0 my-2">
            <div class="Owner">
                <img class="my-2" src="../Upload/<?php echo htmlentities($Image) ?>" alt="">
                <p class="text-center">
                   <?php echo htmlentities($Admin_Bio)?>
                </p>
                <h4 class="">
                 <?php echo htmlentities($Admin_Name)?>
 
                </h4>
                <p>
                <?php echo htmlentities($Position)?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card p-2">
            <h3 class="text-primary fw-bold">
                Progress Bar
            </h3>
            <hr class="my-2">
            <div class="progress_bar my-2 ps-3">
                <span>
                    Total Cows
                </span>
                <div class="progress ">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary" role="progressbar" style="width: <?php echo totalCows()?>%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                        <?php echo totalCows()?>%
                    </div>
                </div>
            </div>
            <div class="progress_bar my-2 ps-3">
                <span>
                  Total Breeds
                </span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" role="progressbar" style="width: <?php echo totalBreeds()?>%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                       <?php echo totalBreeds()?>%
                    </div>
                </div>
            </div>
            <div class="progress_bar my-2 ps-3">
                <span>
                   Total Donations
                </span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" role="progressbar" style="width: <?php echo TotalDonations()?>%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                       <?php echo TotalDonations()?>%
                    </div>
                </div>
            </div>
            <div class="progress_bar my-2 ps-3">
                <span>
                   Total Adoptions
                </span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" role="progressbar" style="width: <?php echo TotalAdoptions()?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                       <?php echo TotalAdoptions()?>%
                    </div>
                </div>
            </div>
            <div class="progress_bar my-2 ps-3">
                <span>
                  Total Photos
                </span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: <?php echo TotalPhotos()?>%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <?php echo TotalPhotos() ?>%
                    </div>
                </div>
            </div>

            <div class="progress_bar my-2 ps-3">
                <span>
                  Total Events
                </span>
                <div class="progress">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary" role="progressbar" style="width: <?php echo TotalEvent()?>%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                        <?php echo TotalEvent() ?>%
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row px-2">
    <div class="card mt-4 p-1 text-center list-group-item-">
        <p>
            Copyright © 2018 Designed by html.design. All rights reserved.
            <br>
            <br>
            Distributed By: ThemeWagon
        </p>
    </div>
</div>

<?php
include 'footer_page.php';
?>