<?php
include ('./Config/functions.php');
include ('./Config/total.php');

// include_once('./Config/session.php');
include 'head_page.php';

?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col">
        <h1 class="list-group-item-warnning">
            <i class="bi bi-calendar-event-fill"></i>
            Completed Events - 
            <span class="badge bg-secondary rounded-circle">
                 <?php TotalComEvent() ?>
            </span>
        </h1>
        </div>
        <?php 
        echo SuccessMessage();
        echo ErrorMessage();
         ?>
        <div class="table-responsive upcoming_table">
            <table class="table table-striped table-hover table-bordered text-center ">
                <thead class="table-dark sticky-top ">
                    <tr class="">
                        <th scope="col">ID</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name of Event</th>
                        <th scope="col">Discription</th>
                        <th scope="col">Start Time</th>
                        <th scope="col">End Time</th>
                        <th scope="col">Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                     <?php
                       global $db;
                       $select_event ="SELECT * FROM events WHERE Publish_Status=1 ORDER BY `id` ASC";
                       $stmt = $db->query($select_event);
                       $sr=0;
                       while($data =$stmt->fetch()){
                        $id =$data['id'];
                        $ename =$data['Event_Name'];
                        $eimage =$data['Event_Image'];
                        $date =$data['Date'];
                        $stime =$data['Event_start_time'];
                        $etime =$data['Event_end_time'];
                        $edescription =$data['Event_description'];
                       $sr++;
                       
                     ?>
                    <tr class="">
                        <td scope="row"><?php echo $sr?></td>
                        <td><img style="height: 70px; width: 120px;" class="rounded img-thumbnail" src="../Upload/<?php echo htmlentities($eimage)?>" alt=""></td>
                        <td><?php echo htmlentities($ename)?></td>
                        <td><?php echo substr($edescription,0,15)?></td>
                        <td style="font-weight:bold;color:blue"><?php echo htmlentities($stime)?></td>
                        <td style="font-weight:bold;color:blue"><?php echo htmlentities($etime)?></td>
                        <td><?php echo htmlentities($date)?></td>
                        <td>
                            <span><a href="event_delete.php?id=<?php echo $id?>"><button type="button" class="btn btn-danger" onclick="return confirm('Are you sure! Do you want to delete this item?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button></a></span>
                        </td>
                    </tr>
                    
                    <?php }?>
                   
                </tbody>
            </table>
        </div>


    </div>
</div>

<?php
include 'footer_page.php';
?>