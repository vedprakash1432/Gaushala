<?php
 include("connection.php");
?>
<?php 

// method to find all cows from cow table 

 function totalCows(){
    global $db;

    $sql ="SELECT count(*) FROM cows";
    $stmt =$db->query($sql);
    $totalrow1 = $stmt->fetch();
    $TotalCows =array_shift($totalrow1);
    echo $TotalCows;
 }


// method to find all breed from breed table 

 function totalBreeds(){
    global $db;

    $sql ="SELECT count(*) FROM cow_category";
    $stmt =$db->query($sql);
    $totalrow2 = $stmt->fetch();
    $TotalBreeds =array_shift($totalrow2);
    echo $TotalBreeds;
 }
// method to find all donations from donations table 

 function TotalDonations(){
    global $db;

    $sql ="SELECT count(*) FROM donations";
    $stmt =$db->query($sql);
    $totalrow3 = $stmt->fetch();
    $TotalDonations =array_shift($totalrow3);
    echo $TotalDonations;
 }

// method to find all adoptions from cow_adooptions table 

  function TotalAdoptions(){
    global $db;
    $sql ="SELECT count(*) FROM cow_adoption";
    $stmt =$db->query($sql);
    $totalrow4 = $stmt->fetch();
    $TotalAdoptions =array_shift($totalrow4);
    echo $TotalAdoptions;
  }

  // method to find all photos from photos table 

  function Totalphotos(){
    global $db;
    $sql ="SELECT count(*) FROM photos";
    $stmt =$db->query($sql);
    $totalrow5 = $stmt->fetch();
    $TotalPhotos =array_shift($totalrow5);
    echo $TotalPhotos;
  }

  // method to find all event from events table 

  function TotalUPEvent(){
    global $db;
    $sql ="SELECT count(*) FROM events WHERE Publish_Status=0";
    $stmt =$db->query($sql);
    $totalrow6 = $stmt->fetch();
    $TotalEvent =array_shift($totalrow6);
    echo $TotalEvent;
  }

  function TotalComEvent(){
    global $db;
    $sql ="SELECT count(*) FROM events WHERE Publish_Status=1";
    $stmt =$db->query($sql);
    $totalrow = $stmt->fetch();
    $TotalEvent =array_shift($totalrow);
    echo $TotalEvent;
  }

  function TotalTeam(){
    global $db;
    $sql ="SELECT count(*) FROM team";
    $stmt =$db->query($sql);
    $totalrow7 = $stmt->fetch();
    $TotalTeam =array_shift($totalrow7);
    echo $TotalTeam;
  }

  function TotalContactMSG(){
    global $db;
    $sql ="SELECT count(*) FROM contact_us";
    $stmt =$db->query($sql);
    $totalrow8 = $stmt->fetch();
    $TotalContactMSG =array_shift($totalrow8);
    echo $TotalContactMSG;
  }

?>