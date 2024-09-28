<?php 
include ('./Config/functions.php');

      if(isset($_POST['add'])){
       $image =$_FILES['image']['name'];
       $target = "../Upload/".basename($_FILES['image']['name']);
       $bactch =$_POST['batch'];
       $breed  =$_POST['breed'];
       $category  =$_POST['category'];
       $dob  =$_POST['dob'];
       $age  =$_POST['age'];

       global $db;

       $insert_cow ="INSERT INTO cows(Image,Batch_Id,Breed,Category,Cow_DOB,Age)";
       $insert_cow .="VALUES(:image,:batch,:breed,:category,:dob,:age)";

       $stmt =$db->prepare($insert_cow);

       $stmt->bindValue(':image',$image);
       $stmt->bindValue(':batch',$bactch);
       $stmt->bindValue(':breed',$breed);
       $stmt->bindValue(':category',$category);
       $stmt->bindValue(':dob',$dob);
       $stmt->bindValue(':age',$age);

       $Execute =$stmt->execute();
       move_uploaded_file($_FILES['image']['tmp_name'],$target);
       if($Execute){
        echo "<script>alert('Cow Added Successfully')</script>";
        echo "<script> location.href='total_cows.php'; </script>";

       }else{
        echo "<script>alert('Cow Not Added!!!')</script>";
        echo "<script> location.href='dashboard.php'; </script>";

       }
      } 
     ?>
