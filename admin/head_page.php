<?php 
include ('./Config/functions.php'); 
include ('./Config/session.php'); 
?>

<!doctype html>
<html lang="en">

<head>
    <title>Guashala</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <!-- bootstrap icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

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
            font-family: Jost;
        }

        .left {
            height: 100vh;
            width: 100%;
        }

        a {
            text-decoration: none;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .logo img {
            height: 50px;
            width: 50px;
            border-radius: 100%;
        }

        .nav-link {
            color: rgb(197, 197, 197);
            transition: .3s;
        }

        .nav-link:hover {
            color: white;
            border-left: 2px solid white;
        }

        .nav-link i {
            font-size: 20px;
        }


        .btn-toggle {
            display: inline-flex;
            align-items: center;
            padding: .25rem .5rem;
            font-weight: 600;
            color: rgba(0, 0, 0, .65);
            background-color: transparent;
            border: 0;
            color: rgb(197, 197, 197);
        }

        .btn-toggle:hover,
        .btn-toggle:focus {
            color: white;
        }

        .btn-toggle::before {
            width: 1.25em;
            line-height: 0;
            content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%281111,2000,200,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
            transition: transform .35s ease;
            transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
            color: rgba(251, 251, 251, 0.85);
        }

        .btn-toggle[aria-expanded="true"]::before {
            transform: rotate(90deg);
        }

        .btn-toggle-nav a {
            display: inline-flex;
            padding: .1875rem .5rem;
            margin-top: .125rem;
            margin-left: 1.25rem;
            text-decoration: none;
            color: white;
        }

        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
            color: black;
            background-color: rgb(227, 227, 227);
        }

        .down {
            height: 89vh;
            width: 100%;
        }

        .right_top {
            height: auto;
            width: 100%;
            display: flex;
            justify-content: space-evenly;
            align-items: center;
        }

        .right_top img {
            height: 50px;
            width: 50px;
            border-radius: 100%;
        }

        /* Index Page CSS  */

        .scroll_bar {
            height: 90vh;
            width: 100%;
            overflow-y: scroll;
        }

        .four_card {
            height: auto;
            width: 100%;
            display: flex;
            justify-content: space-around;
            align-items: center;
            flex-direction: row;
        }

        .four_card img {
            height: 80px;
            width: auto;
        }

        .Owner {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .Owner img {
            height: 100px;
            width: 100px;
            border-radius: 100%;
        }

        /* Profile Page CSS  */

        .profile_image img {
            height: 150px;
            width: 150px;
            border-radius: 100%;
        }

        /* Upcoming Events CSS  */

        .upcoming_table {
            height: 61vh;
            width: 100%;
            overflow-y: scroll;
        }

        /* Photos CSS  */

        .admin_photos {
            transition: .3s;
        }

        .admin_photos:hover {
            transform: scale(1.1);
        }

    </style>
</head>

<body>
       <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 m-0 p-0">
                <div class="left bg-dark">
                    <div class="logo p-3">
                        <h5 class="text-light">
                            <i class="bi bi-person-bounding-box"></i>
                            Admin Panel
                        </h5>
                    </div>
                    <div class="down">
                        <ul class="nav nav-pills flex-column mb-auto">
                            <li class="nav-item">
                                <a href="dashboard.php" class="nav-link" aria-current="page">
                                    <i class="bi bi-grid"></i>
                                    Dashboard
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="profile.php" class="nav-link" aria-current="page">
                                    <i class="bi bi-person"></i>
                                    Profile
                                </a>
                            </li>
                            <li class="mb-1 nav-link">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#branch-collapse" aria-expanded="false">
                                    Branch
                                </button>
                                <div class="collapse" id="branch-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="total_cows.php" class=" rounded">
                                                Total cows
                                            </a></li>
                                            <li><a href="#" class=" rounded">Total Sewa</a></li>
                                            <li><a href="#" class=" rounded">Total Pregnent Cow</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 nav-link">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#cow-collapse" aria-expanded="false">
                                    Cows
                                </button>
                                <div class="collapse" id="cow-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="total_cows.php" class=" rounded">
                                                Total cows
                                            </a></li>
                                        <li><a href="total_breeds.php" class=" rounded">Total Breeds</a></li>
                                    </ul>
                                </div>
                            </li>

                            <li class="mb-1 nav-link">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#events-collapse" aria-expanded="false">
                                    Events
                                </button>
                                <div class="collapse" id="events-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="upcoming_event.php" class=" rounded">
                                                Upcoming Events
                                            </a></li>
                                        <li><a href="complete_event.php" class=" rounded">Completed Events</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 nav-link">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#gallery-collapse" aria-expanded="false">
                                    Gallery
                                </button>
                                <div class="collapse" id="gallery-collapse" style="">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="photos.php" class=" rounded">Photos</a></li>
                                        <li><a href="videos.php" class=" rounded">Videos</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mb-1 nav-link">
                                <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#others-collapse" aria-expanded="false">
                                    Others
                                </button>
                                <div class="collapse" id="others-collapse">
                                    <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                        <li><a href="adoption.php" class=" rounded">Adoption</a></li>
                                        <li><a href="donation.php" class=" rounded">Donation</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <a href="our_team.php" class="nav-link">
                                    <i class="bi bi-people"></i>
                                    Our Team
                                </a>
                            </li>
                            <li>
                                <a href="contact_us.php" class="nav-link">
                                    <i class="bi bi-person-rolodex"></i>
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-10 m-0 p-0">
                <!-- Right Top Navbar Section  -->
                <div class="right_top bg-dark p-2">
                    <img src="../Images/skg.jpeg" alt="">
                    <h2 class="text-light">
                        Shri Krishna Gaushala
                    </h2>
                    <div class="logout">
                        <a href="logout.php"><button class="btn btn-danger">
                            <i class="bi bi-box-arrow-right"></i>
                            Log Out
                        </button></a>
                    </div>
                </div>
                <div class="container-fluid m-0 p-0 list-group-item-primary px-3 scroll_bar">
                    <div class="row">

                        <!-- Add Cow Section  -->

                        <div class="col-md-4">
                            <div class="four_card my-3 border p-2 rounded bg-dark bg-opacity-25 card">
                                <i class="bi bi-patch-plus display-2"></i>
                                <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal1" data-bs-whatever="@getbootstrap">
                                    <i class="bi bi-plus-lg"></i>
                                    Add Cow
                                </button>
                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add Cow</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="add_cow.php" method="post" enctype="multipart/form-data">
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Select Cow Image</label>
                                                        <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId" Required />
                                                    </div>
                                                    <!-- <div class="mb-3">
                                                        <label for="">Cow Name</label>
                                                        <input type="text" name="CowName" id="" class="form-control" placeholder=" Enter Cow Name like: JERSEY COW, BROWN SWISS etc" aria-describedby="helpId" />
                                                    </div> -->
                                                    <div class="mb-3">
                                                        <label for="">Batch Id</label>
                                                        <input type="number" name="batch" id="" class="form-control" placeholder="Enter Batch id" aria-describedby="helpId" Required/>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-bookmark-check"></i></label>
                                                        <select class="form-select" name="breed" id="inputGroupSelect01" Required>
                                                            <option selected>Select Breed of Cow</option>
                                                            <option value="JERSEY COW">JERSEY COW</option>
                                                            <option value="BROWN SWISS">BROWN SWISS</option>
                                                            <option value="GUERNSEY">GUERNSEY</option>
                                                            <option value="AYRSHIRE">AYRSHIRE</option>
                                                            <option value="RED AND WHITE HOLSTEIN">RED AND WHITE HOLSTEIN</option>
                                                            <option value="MILKING SHORTHORN">MILKING SHORTHORN</option>
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <label class="input-group-text" for="inputGroupSelect01"><i class="bi bi-bookmark-check"></i></label>
                                                        <select class="form-select" name="category" id="inputGroupSelect01" Required>
                                                            <option selected>Select Category of Cow</option>
                                                            <option value="COW">COW</option>
                                                            <option value="OX">OX</option>
                                                            <option value="CALF">CALF</option>
                                                            <option value="OTHERS">OTHERS</option>
                                                        </select>
                                                    </div>
                                                    <div class="mb-3">
                                                        
                                                        <input type="calendar" name="dob" id="" class="form-control" placeholder="Enter Cow DOB" aria-describedby="helpId" Required/>
                                                    </div>
                                                    <div class="mb-3">
                                                        
                                                        <input type="number" name="age" id="" class="form-control" placeholder="Enter Cow Age" aria-describedby="helpId" Required />
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" name="add" class="btn btn-primary" value="Add"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Event Section  -->
                         
                        <div class="col-md-4">
                            <div class="four_card my-3 border p-2 rounded bg-dark bg-opacity-25 card">
                                <i class="bi bi-calendar-plus display-2"></i>
                                <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal2" data-bs-whatever="@getbootstrap">
                                    <i class="bi bi-plus-lg"></i>
                                    Add Event
                                </button>
                                <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add Event</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="add_event_process.php" method="post" enctype="multipart/form-data">
                                                    <div class="mb-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                                        <input type="File" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId" />
                                                    </div>
                                                    <div class="mb-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar2-event"></i></span>
                                                        <input type="text" name="event_name" id="" class="form-control" placeholder=" Enter Event Name of Event" aria-describedby="helpId" />
                                                    </div>
                                                    <!-- date  -->
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar"></i></span>
                                                        <input type="date" class="form-control" name="date" placeholder="dd/mm/yyyy" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>
                                                    <!-- Start Time  -->
                                                    <label for="inputGroupSelect01">Select Start Time of Event</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                                                        <input type="time" name="stime" class="form-control" placeholder="dd/mm/yyyy" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>

                                                    <!-- End Time  -->
                                                    <label for="inputGroupSelect01">Select End Time of Event</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
                                                        <input type="time" name="etime" class="form-control" placeholder="dd/mm/yyyy" aria-label="Username" aria-describedby="basic-addon1">
                                                    </div>

                                                    <!-- Event Description  -->
                                                    <div class="mb-3 input-group">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-file-earmark-text"></i></span>
                                                        <textarea class="form-control" name="description" id="" rows="3" placeholder="Enter Event Description"></textarea>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" name="event" class="btn btn-primary" value="Add Event"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Add Photo Section  -->

                        <div class="col-md-4">
                            <div class="four_card my-3 border p-2 rounded bg-dark bg-opacity-25 card">
                                <i class="bi bi-image display-2"></i>
                                <button type="button" class="btn btn-primary shadow py-2 px-3 fw-bold" data-bs-toggle="modal" data-bs-target="#exampleModal3" data-bs-whatever="@getbootstrap">
                                    <i class="bi bi-plus-lg"></i>
                                    Add Photo
                                </button>
                                <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-3" id="exampleModalLabel"><i class="bi bi-gem"></i> Add Photo</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="image_added_by.php" method="post" enctype="multipart/form-data">
                                                    <!-- add Image  -->
                                                    <label for="inputGroupFile02">Add Photos</label>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                                        <input type="file" name="image" class="form-control" id="inputGroupFile02">
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                                        <select class="form-select" name="category" id="inputGroupSelect01" Required>
                                                            <option selected>Select Category of gaushala</option>
                                                            <option value="Main Gaushala">Main Gaushala</option>
                                                            <option value="Branch Gaushala">Branch Gaushala</option>
                                                            
                                                        </select>
                                                    </div>
                                                    <div class="input-group mb-3">
                                                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-image"></i></span>
                                                        <input type="text" name="addedby" placeholder="Image Added By" class="form-control" id="inputGroupFile02">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                                        <input type="submit" name="photobtn" class="btn btn-primary" value="Add Photo"/>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0 p-0 mb-2">