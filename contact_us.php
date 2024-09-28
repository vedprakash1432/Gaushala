<?php
// ob_start();
 include('header.php');
?>
<?php include("./admin/Config/functions.php"); ?>

<!-- Header  -->

<?php
  if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $message=$_POST['message'];
    global $db;
    
     if(empty($name)||empty($email)|| empty($phone)||empty($message)){
        echo"<script>alert('all field must be fill out!!')</script>";
        ?> <script> windows.location.href="contact_us.php"</script><?php
  } 
// elseif(is_numeric($name)){
//         echo "<script> alert('Name should be alphabetical!')</script>";
//         Redirect_to("contact_us.php");
        
//  }
 elseif(strlen($name)<3){
    echo "<script> alert('Name should be more than 3 charector!')</script>";
  ?> <script> windows.location.href="contact_us.php"</script><?php
    
}elseif(strlen($phone)<10){
    echo "<script> alert('Number should be 10 digits!')</script>";
  ?> <script> windows.location.href="contact_us.php"</script><?php
    
}
 
else{
    $insert_sql ="INSERT INTO contact_us(Name,Email,Phone,Message)";
    $insert_sql .="VALUES(:name,:email,:number,:message)";
    $stmt = $db->prepare($insert_sql);
    $stmt->bindValue(':name',$name);
    $stmt->bindValue(':email',$email);
    $stmt->bindValue(':number',$phone);
    $stmt->bindValue(':message',$message);
    $execute=$stmt->execute();
    if($execute){
        echo "<script>alert('Thank you for connecting us Successfully')</script>";
        echo "<script> location.href='index.php'; </script>";

    }
   }
  }
?>

<!-- Contact Us -->

<div class="container-fluid">
    <div class="row">
        <h1 class="text-center mt-3 list-group-item-primary py-2">Contact Us</h1>
        <hr class="my-4">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-geo-alt text-danger display-5"></i>
                    <h4 class="my-4">
                        Address:
                        <br>
                        <span>
                            Noida, Ghaziabad, Uttar Pradesh
                        </span>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-telephone text-danger display-5"></i>
                    <h4 class="my-4">
                        Mobile:
                        <br>
                        <span>
                            +91 7052141220
                        </span>
                    </h4>
                </div>
            </div>
            <div class="col-md-4">
                <div class="cont_location text-center">
                    <i class="bi bi-envelope text-danger display-5"></i>
                    <h4 class="my-4">
                        Email:
                        <br>
                        <span>
                            rajkumarsharma705214@gmail.com
                        </span>
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row bg-light">
        <div class="col-md-6 pt-5">
            <div class="cont_map">
                <h3>
                    Locate Us
                </h3>
                <iframe class="border shadow rounded mt-4" src="https://www.google.com/maps/embed?pb=!4v1720351596160!6m8!1m7!1sInMAsmGAFHMnn1TvzbG20g!2m2!1d28.65824193526247!2d77.41990430053741!3f320.83289848450534!4f-4.320358838886392!5f0.7820865974627469" style="border:0; height: 450px; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div class="col-md-6 pt-5">
            <div class="cont_form">
                <h3>
                    Send Massage
                </h3>
                <p class="text-danger">
                    * All fields are required
                </p>
                <form class="row g-3 px-2 needs-validation" action="" method="post" enctype="multipart/form-data" novalidate>
                    <div class="form-group mt-4">
                        <label for="validationCustom01" class="form-label">
                            Name *
                        </label>
                        <input type="text" class="form-control mt-2" name="name" id="exampleFormControlInput1" placeholder="Enter Your First Name" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="validationCustom01" class="form-label">
                            Email address *
                        </label>
                        <input type="email" class="form-control mt-2"  name="email" id="exampleFormControlInput1" placeholder="Enter Your Email" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlInput1">
                            Phone *
                        </label>
                        <input type="number" class="form-control mt-2" name="phone" id="exampleFormControlInput1" placeholder="Enter Your Phone" required min="1000000000" max="9999999999">
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>

                    <div class="form-group mt-4">
                        <label for="exampleFormControlTextarea1">
                            Message *
                        </label>
                        <textarea class="form-control mt-2"  name="message" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Your Message" required></textarea>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                    </div>
                    <input type="submit"  name="submit" class="btn btn-outline-primary border-2 border border-primary my-3 w-25 shadow" value="Submit"/>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    // Bootstrap Form Validation 

    (() => {
        'use strict'

        const forms = document.querySelectorAll('.needs-validation')

        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })
    })()
</script>

<!-- QR Model  -->
<?php include('qr_model.php'); ?>


<!-- Footer  -->

<?php include('footer.php'); ?>