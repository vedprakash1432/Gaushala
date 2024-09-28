<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-gem"></i>
                Contact Us -
                <span class="badge bg-secondary rounded-circle">
                            <?php TotalContactMSG() ?>
                        </span>
            </h1>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-primary table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                      global $db;

                      $select_message ="SELECT * FROM contact_us";
                      $stmt =$db->query($select_message);
                      $sr=0;
                      while($DataRow =$stmt->fetch()){
                         
                         $id      =$DataRow['id'];
                         $Name    =$DataRow['Name'];
                         $Email   =$DataRow['Email'];
                         $Phone   =$DataRow['Phone'];
                         $Message =$DataRow['Message'];
                         $sr++;
                      ?>
                    <tr class="">
                        <td scope="row"><?php echo $sr?></td>
                        <td class="text-primary"><?php echo strtoupper($Name)?></td>
                        <td><?php echo $Email?></td>
                        <td><?php echo $Phone?></td>
                        <td><?php echo substr($Message,0,40)?></td>
                        <td>
                           <span><a href="delete_contact_us.php?id=<?php echo $id?>">
                            <button type="button" class="btn btn-danger" onclick="return confirm('Are you sure? Do you want to delete this item.')"  data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button></a></span>
                        </td>
                    </tr>
                  <?php  } ?>
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>