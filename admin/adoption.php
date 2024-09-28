<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-image"></i>
                Adopted People -
                <span class="badge bg-secondary rounded-circle">
                                <?php TotalAdoptions() ?>
                            </span>
            </h1>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-primary table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Category</th>
                        <th scope="col">Batch id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                       
                        <th scope="col">Address</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Date & Time</th>
                        <th scope="col">Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                     <?php
                       global $db;
                       
                       $select_adopt="SELECT * FROM cow_adoption ORDER BY `id` ASC";
                       $stmt =$db->query($select_adopt);
                       $sr=0;
                       while($data =$stmt->fetch()){
                        $id            =$data['id'];
                        $Breed         =$data['Breed'];
                        $Category      =$data['Category'];
                        $Batch         =$data['Batch'];
                        $Name          =$data['Name'];
                        $Email         =$data['Email'];
                        $Number        =$data['Number'];
                        $Country       =$data['Country'];
                        $Pincode       =$data['Pincode'];
                        $Address       =$data['Address'];
                        $Amount        =$data['Amount'];
                        $Adoption_date =$data['Adoption_date'];
                       $sr++;
                     ?>
                    <tr class="">
                        <td scope="row"><?php echo htmlentities($sr);?></td>
                        <td><?php echo htmlentities($Breed);?></td>
                        <td><?php echo htmlentities($Category);?></td>
                        <td><strong><?php echo htmlentities($Batch);?></strong</td>
                        <td class="text-primary"><?php echo htmlentities(strtoupper($Name))?></td>
                        <td><?php echo htmlentities($Email)?></td>
                        <td><?php echo htmlentities($Number)?></td>
                        <td><?php echo htmlentities($Address.", ".$Pincode.", ".$Country)?></td>
                        <td class="text-success">$<?php echo htmlentities($Amount)?></td>
                        <td><?php echo htmlentities($Adoption_date)?></td>
                        <td>
                            <span><a href="adoption_delete.php?id=<?php echo $id?>">
                                <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure! Do you want to delete this item?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
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