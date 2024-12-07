<!DOCTYPE html>
<html lang="en">

    <head>

        <title>Extreme Fitness</title>

        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="landing/css/bootstrap.min.css">
        <link rel="stylesheet" href="landing/css/font-awesome.min.css">
        <link rel="stylesheet" href="landing/css/aos.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.5.0/remixicon.min.css"
            integrity="sha512-T7lIYojLrqj7eBrV1NvUSZplDBi8mFyIEGFGdox8Bic92Col3GVrscbJkL37AJoDmF2iAh81fRpO4XZukI6kbA=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


        <!-- MAIN CSS -->
        <link rel="stylesheet" href="landing/css/tooplate-gymso-style.css">

        <style>
        /* Style the profile link */
        .profile {
            position: relative;
            display: inline-block;
        }

        .profile-link {
            text-decoration: none;
            font-size: 16px;
            color: black;
            padding: 10px;
            border-radius: 5px;
        }

        .profile-link:hover {}

        /* Hide the dropdown menu initially */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
        }

        /* Style for the dropdown menu links */
        .dropdown-menu a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color on hover */
        .dropdown-menu a:hover {
            background-color: #f13a11;
        }

        /* Show the dropdown menu on hover */
        .profile:hover .dropdown-menu {
            display: block;
        }


        /* Dropdown Menu - Initially hidden */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            min-width: 200px;
            z-index: 1000;
        }

        /* Show dropdown on hover */
        .nav-item.dropdown:hover .dropdown-menu {
            display: block;
        }

        /* Style for dropdown items */
        .dropdown-menu a {
            padding: 8px 16px;
            display: block;
            text-decoration: none;
            color: #333;
        }

        /* Hover effect for dropdown items */
        .dropdown-menu a:hover {
            background-color: #f1f1f1;
        }
        </style>




    </head>

    <body data-spy="scroll" data-target="#navbarNav" data-offset="50">

        <!-- MENU BAR -->
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <div class="logos">
                    <a href="{{url('/')}}">
                        <img src="loginss/assets/images/logoz.png" alt="logo" class="logos">

                    </a>
                </div>

                <a class="navbar-brand" href="index.html">EXTREME GYM</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item">
                            <a href="{{url('members')}}" class="nav-link smoothScroll">Home</a>
                        </li>

                        <li class="nav-item">
                            <a href="#about" class="nav-link smoothScroll">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link smoothScroll dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Classes
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ url('yogas') }}">Yoga</a></li>
                                <li><a class="dropdown-item" href="{{ url('pilates') }}">Pilates</a></li>
                                <li><a class="dropdown-item" href="{{ url('trainstrengths') }}">Strength Training</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ url('zumba') }}">Zumba</a></li>
                                <li><a class="dropdown-item" href="{{ url('cardios') }}">Cardio</a></li>
                            </ul>
                        </li>


                        <li class="nav-item">
                            <a href="#schedule" class="nav-link smoothScroll">My Schedule</a>
                        </li>

                        <li class="nav-item">
                            <a href="#contact" class="nav-link smoothScroll">List Trainer</a>
                        </li>


                    </ul>


                    <div class="profile">
                        <a href="#" class="profile-link">My Profile</a>
                        <div class="dropdown-menu">
                            <a href="#">View Profile</a>
                            <a href="#">Edit Profile</a>
                            <a href="{{route('logout')}}">Log Out</a>
                        </div>
                    </div>



                </div>



            </div>

        </nav>







        <section class="main section" id="mains">

            <h1 class="yogaas">Cardio Training</h1>

            <div class="yogacards-container">
                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/1.jpg" alt="">

                    <div class="infocard">
                        <h3>
                            Steady-State Cardio
                        </h3>
                        <p> This involves maintaining a consistent, moderate-intensity activity over a prolonged period.
                            Common examples include jogging, cycling, swimming, and rowing.</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/2.jpg" alt="">
                    <div class="infocard">
                        <h3>High-Intensity Interval Training</h3>
                        <p>Involves alternating between short bursts of high-intensity exercise and periods of
                            low-intensity recovery or rest. This method can include activities like sprints, burpees, or
                            cycling sprints.</p>

                        <button class="btn btn-warning">View Details</button>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/3.jpg" alt="">
                    <div class="infocard">
                        <h3>Plyometrics (Jump Training) </h3>
                        <p>Exercises involving explosive movements such as jumping, skipping, and bounding. Examples
                            include jump squats, box jumps, and burpees.</p>

                        <button class="btn btn-warning">View Details</button>
                    </div>
                </div>



                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/4.jpg" alt="">
                    <div class="infocard">
                        <h3>Fartlek Training </h3>
                        <p>A Swedish term meaning “speed play,” this type of training combines continuous running with
                            random, unstructured intervals of faster and slower-paced running.</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/5.jpg" alt="">
                    <div class="infocard">
                        <h3>Cycling </h3>
                        <p>Involves riding a bike at various intensities. Outdoor cycling is often more varied, while
                            indoor cycling (like spin classes) is typically structured with different intensity
                            intervals.</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/cardio/6.jpg" alt="">
                    <div class="infocard">
                        <h3>Jump Rope </h3>
                        <p>Involves jumping over a rope that swings under your feet. It can be done as a steady-state
                            workout or in intervals.</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>
            </div>

        </section>














        <script src="landing/js/jquery.min.js"></script>
        <script src="landing/js/bootstrap.min.js"></script>
        <script src="landing/js/aos.js"></script>
        <script src="landing/js/smoothscroll.js"></script>
        <script src="landing/js/custom.js"></script>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>


    </body>

</html>