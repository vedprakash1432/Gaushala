<?php
 include("connection.php");
?>
<?php

// it is use for give the location to redirect another page
// function Redirect_to($new_location){
//     header('Location:'.$new_location);
//     exit;
// }

function create_course($name,$course_desc,$bannerobj){
    if($course_name=="" || $course_desc=="" || $bannerobj==""){
        echo "<script>alert('Missing Anyone of the field.')</script>";
    }else{
        //
        // echo $bannerobj['tmp_name'];
        // die;
       
        $stmt = $this->mysqli->prepare("INSERT INTO contact_us(course_name,course_description,course_banner,date_created) VALUES(?,?,?,?)");
        if(false == $stmt){
            trigger_error("Error in query:".mysqli_connect_error(),E_USER_ERROR);
        }else{

            $cdate = date('Y-m-d');
            $stmt->bind_param('ssss',$course_name,$course_desc,$bannername,$cdate);
            $stmt->execute();
            echo "<script>alert('Course Added Successfully')</script>";
        }
    }

}
?>