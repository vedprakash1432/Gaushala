<?php
 include("./Config/functions.php");
 include("./Config/session.php");
?>
<?php
if(isset($_POST['login'])){
     $admin =$_POST['name'];
     $password =$_POST['password'];

    if(empty($admin)|| empty($password)){
        $_SESSION['ErrorMessage'] ="All field must be fill out!!";
        // Redirect_to('index.php');
    }elseif(strlen($admin)<3){
        $_SESSION['ErrorMessage'] ="Admin Name must be more than 3 charectors!";
        // Redirect_to('index.php');
    }elseif(!($admin =='admin' && $password =='12345' )){
        $_SESSION['ErrorMessage'] ="You can't login . name or password didn't match!!!";
        // Redirect_to('index.php');
    }else{
        
        global $db;
        $sql="SELECT * FROM `admin` WHERE `Admin_Name`=:admin AND `Password`=:password LIMIT 1";
        $stmt =$db->prepare($sql);
        $stmt->bindValue(':admin',$admin);
        $stmt->bindValue(':password',$password);
        $stmt->execute();
        $result = $stmt->rowCount(); 
       
        if($result == 1){
             $found_acount =$stmt->fetch();
            $_SESSION['AdminId'] = $found_acount['id'];
            $_SESSION['Admin_Name'] = $found_acount['Admin_Name'];
            $_SESSION['AdminImage'] = $found_acount['Image'];
            $_SESSION['AdminPassword'] = $found_acount['Password'];
            $_SESSION['AdminEmail'] = $found_acount['Email'];
            $_SESSION['AdminNumber'] = $found_acount['Number'];
            $_SESSION['SuccessMessage'] = "Welcome ".$_SESSION['Admin_Name']."!";
            echo "<script> location.href='dashboard.php'; </script>";
            

            // return $stmt->fetch();
        }else{
            return null;
        }

    }
  }
  ?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>

    <!-- bootstrap icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
        integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

    <!-- title icon  -->
    <link rel="icon" href="../Images/WhatsApp Image 2024-04-06 at 8.28.51 PM.jpeg">


    <!-- font famaly cdn  -->
    <link href="https://fonts.googleapis.com/css?family=Jost" rel="stylesheet" />

    <!-- AOS animation Link -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Lordicon CDN  -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <style>
        body {
            background-image: url('../Images/pexels-andrey-niqi-19566-254178.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
            font-family: Jost;
            /*background image opacity */
            background-color: rgba(0, 0, 0, 0.5);
            background-blend-mode: darken;

        }

        .center {
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .card {
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
        }
    </style>

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 m-0 p-0">
                <div class="center m-0 p-0">
                    <div class="border card p-3 border-info mb-3">
                    <h2 class="text-center text-info">
                        S K Gaushala
                    </h2>
                    </div>
                    <div class="card m-0 p-4 border border-2 border-light rounded">
                        <div class="card-header">
                            <h1 class="text-center">Admin Login</h1>
                        </div>
                        <div class="card-body">
                            <?php
                             echo SuccessMessage();
                             echo ErrorMessage();
                             ?>
                            <form action="" method="post">
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Enter Your E-mail">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Your Password">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" Required>
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <input type="submit" name="login" class="btn btn-success w-100" value="Login"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>