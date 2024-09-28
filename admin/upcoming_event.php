<?php
include ('./Config/functions.php');
include ('./Config/total.php');

include 'head_page.php';
?>

<div class="container-fluid m-0 p-0">
    <div class="row">
        <div class="col">
        <h1 class="list-group-item-warnning">
            <i class="bi bi-calendar-event-fill"></i>
            Upcoming Events -
            <span class="badge bg-secondary rounded-circle">
                        <?php TotalUPEvent() ?>
             </span>

        </h1>
        </div>
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
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                      global $db;

                      $select_event ="SELECT * FROM events WHERE Publish_Status=0 ORDER BY `id` ASC";
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
                    <tr class="text-center p-1">
                       <td scope="row"><?php echo $sr?></td>
                        <td><img style="height: 70px; width: 120px;" class="rounded img-thumbnail" src="../Upload/<?php echo htmlentities($eimage)?>" alt=""></td>
                        <td><?php echo htmlentities(ucfirst($ename))?></td>
                        <td><?php echo ucfirst(substr($edescription,0,15))."..."?></td>
                        <td class="text-primary" style="font-weight:bold;"><?php echo htmlentities($stime)?></td>
                        <td class="text-info" style="font-weight:bold;"><?php echo htmlentities($etime)?></td>
                        <td><?php echo htmlentities($date)?></td>
                        <td>
                            <span><a href="event_delete.php?id=<?php echo $id?>">
                                <button type="button" onclick="return confirm('Are you sure! Do you want to delete this item?');" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-trash-fill"></i></button>
                            </a></span>
                            <span><a href="event_update.php?id=<?php echo $id?>">
                                 <button type="button" class="btn btn-success" onclick="return confirm('Are you sure! Do you want to Update this item?');" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i>
                            </button></a></span>
                        </td>
                        <td>
                            <span><a href="event_publish.php?id=<?php echo $id?>"> <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@getbootstrap"><i class="bi bi-pencil-square"></i> Complete</button></a></span>
                        
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