<?php
include ('./Config/functions.php');

if(isset($_POST['photobtn'])){

    $image =$_FILES['image']['name'];
    
    $category =$_POST['category'];
    $added_by =$_POST['addedby'];
    $target = "../Upload/".basename($_FILES['image']['name']);

    global $db;

    $insert_photo ="INSERT INTO photos(Photos,Category,Added_by)";
    $insert_photo .="VALUES(:photo,:category,:addedby)";
    
    $stmt =$db->prepare($insert_photo); 
    $stmt->bindValue(':photo',$image);
    $stmt->bindValue(':category',$category);
    $stmt->bindValue(':addedby',$added_by);
   
    $Execute =$stmt->execute();
    move_uploaded_file($_FILES['image']['tmp_name'],$target);
    if($Execute){
        echo "<script>alert('Photo Added Successfully')</script>";
        echo "<script> location.href='photos.php'; </script>";
    exit;

    }else{
        echo "Something went wrong, try again?";
        echo "<script> location.href='dashboard.php'; </script>";
    }

}
?>
