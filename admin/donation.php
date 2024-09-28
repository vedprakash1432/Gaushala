<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col bg-light">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-gem"></i>
                Total Doners -
                <span class="badge bg-secondary rounded-circle"><?php TotalDonations() ?></span>
            </h1>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-primary table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Full Name</th>
                        
                        <th scope="col">Amount</th>
                        <th scope="col">Date&Time</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Email</th>
                        <th scope="col">Country</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                       
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    global $db;
                    $select_donors ="SELECT * FROM donations ORDER BY `id` ASC";

                     $stmt =$db->query($select_donors);
                     $sr=0;
                     while($DataRow =$stmt->fetch()){
                        $id         =$DataRow['id'];
                        $title      =$DataRow['Title'];
                        $fname      =$DataRow['First_Name'];
                        $lname      =$DataRow['Last_Name'];
                        $email      =$DataRow['Email'];
                        $phone      =$DataRow['Phone'];
                        $country    =$DataRow['Country'];
                        $state      =$DataRow['State'];
                        $address    =$DataRow['Address'];
                        $dona_date  =$DataRow['Donation_date'];
                        $amount     =$DataRow['Amount'];
                        $sr++;
                    ?>
                    <tr class="">
                        <td scope="row"><?php echo htmlentities($sr)?></td>
                        <td><?php echo htmlentities($title)?></td>
                        <td><strong><?php echo htmlentities(strtoupper($fname." ".$lname))?></strong></td>
                     
                        <td class="text-success"><strong>$<?php echo htmlentities($amount)?></strong></td>
                        <td><?php echo htmlentities($dona_date)?></td>
                        <td><?php echo htmlentities($phone)?></td>
                        <td><?php echo htmlentities($email)?></td>
                        <td><?php echo htmlentities($country)?></td>
                        <td><?php echo htmlentities($address)?></td>
                        <td>
                            <span><a href="donation_delete.php?id=<?php echo $id?>">
                                <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure! Do you want to delete this item?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
                        </td>
                        
                    </tr>
                  <?php    } ?>
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>