<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col bg-light">
            <h1 class="list-group-item-warnning">
                <i class="bi bi-calendar-event-fill"></i>
                Total Cows -
                <span class="badge bg-secondary rounded-circle">
                        <?php totalCows() ?>
                    </span>
            </h1>
        </div>
        <div class="table-responsive upcoming_table">
            <table class="table table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Cow Image</th>
                        <th scope="col">Breed</th>
                        <th scope="col">Batch Id</th>
                        <th scope="col">Category</th>
                        <th scope="col">Age</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Action</th>
                      
                    </tr>
                </thead>
                <tbody>
                    <?php
                      global $db;

                      $select_event ="SELECT * FROM cows ORDER BY `id` ASC";
                      $stmt = $db->query($select_event);
                      $sr =0;
                      while($data =$stmt->fetch()){
                        $id =$data['id'];
                        $Image =$data['Image'];
                        $Batch_Id =$data['Batch_Id'];
                        $Breed =$data['Breed'];
                        $Category =$data['Category'];
                        $Cow_DOB =$data['Cow_DOB'];
                        $Age =$data['Age'];
                        $sr++;
                     ?>
                    <tr class="text-center p-1">
                       <td scope="row"><?php echo $sr?></td>
                        <td><img style="height: 70px; width: 120px;" class="rounded img-thumbnail" src="../Upload/<?php echo htmlentities($Image)?>" alt=""></td>
                        <td><?php echo htmlentities(ucfirst($Breed))?></td>
                        <td class="text-dark fw-bold"><?php echo ucfirst($Batch_Id)?></td>
                        <td class="text-success" style="font-weight:bold;"><?php echo htmlentities($Category)?></td>
                        <td ><?php echo htmlentities($Age)?></td>
                        <td><?php echo htmlentities($Cow_DOB)?></td>
                        <td>
                            <span><a href="delete_cow.php?id=<?php echo $id?>">
                                <button type="button" onclick="return confirm('Are you sure! Do you want to delete this item?');" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
                            <span><a href="update_cow.php?id=<?php echo $id?>"> <button type="button" class="btn btn-warning" onclick="return confirm('Are you sure! Do you want to Update this item?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i></button></a></span>
                        </td>
                       
                    </tr>
                 <?php   }?>
                  
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>