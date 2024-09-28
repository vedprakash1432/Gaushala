<!doctype html>
<html lang="en">

<head>
    <title>Gaushala</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>

    <!-- font famaly cdn  -->
    <link href='https://fonts.googleapis.com/css?family=Jost' rel='stylesheet'>

    <!-- bootstrap icon cdn  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Tab Icon Link -->
    <link rel="icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhjh7xa-HOZh5w3UNZDiLs-TaVwjR0Qmt-9KFXYFK-13IvqMuosI6C9GMGLUAVmeBj8BA1mUxrX_v60aLa9Ql7DCEiDKFQjkRmdQH4jXKaG1w3TKE50Wx-W8sEOldhDSuJgLX4Um5UmHZYBseYxHWlKnxMts-YW-n-b4Y2WsskHh4tNv4vpf3RMhIB1/s320/main%20logo.png">

    <!-- AOS animation Link -->

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- Css Link -->

    <link rel="stylesheet" href="style.css">

    <style>
        .all_cow_images {
            transition: .3s;
        }

        .all_cow_images:hover {
            transform: scale(1.1);
        }
       .nav-link:hover{
            letter-spacing:1px;
            transition: all .5s;
            box-shadow: 2px 2px 3px 3px blue;
           

        }
    </style>

    <!-- Js Link -->

    <script src="script.js"></script>
    <script src="./jquery/jquery.js"></script>

</head>

<body>

    <nav class="navbar navbar-expand-lg bg-dark shadow sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand m-0 p-0" href="index.php">
                <img class="rounded-circle" src="images/skg.jpeg" alt="">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about_us.php">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="department.php">DEPARTMENT</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            EVENTS
                        </a>
                        <ul class="dropdown-menu bg-dark shadow">
                            <li><a class="dropdown-item" href="upcoming_events.php"><i class="bi bi-chevron-right"></i>
                                    Upcoming Events</a></li>

                            <li><a class="dropdown-item" href="completed_events.php"><i class="bi bi-chevron-right"></i>
                                    Completed Events</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GALLERY
                        </a>
                        <ul class="dropdown-menu bg-dark shadow">
                            <li><a class="dropdown-item" href="photo_gallery.php"><i class="bi bi-chevron-right"></i>
                                    Photo Gallery</a></li>
                            <li><a class="dropdown-item" href="video_gallery.php"><i class="bi bi-chevron-right"></i>Video
                                    Gallery</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="branches.php">BRANCH</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            OTHERS
                        </a>
                        <ul class="dropdown-menu bg-dark shadow">
                            <li><a class="dropdown-item" href="category.php"><i class="bi bi-chevron-right"></i>
                                    CATEGORIES</a></li>
                                    <li><a class="dropdown-item" href="adoption&donation.php"><i class="bi bi-chevron-right"></i>DONATION</a></li>
                                    <li><a class="dropdown-item" href="adopt.php"><i class="bi bi-chevron-right"></i>ADOPTION</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact_us.php">CONTACT US</a>
                    </li>
                        <!-- Button trigger modal -->
                    <li class="nav-item">
                    <button type="button" class="btn btn-primary mx-5 py-2 shadow" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-currency-dollar"></i> Donate Now
                        </button>
                    </li>

                </ul>
            </div>
        </div>
    </nav>