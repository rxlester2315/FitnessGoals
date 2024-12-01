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
                            <a href="{{url('Non')}}" class="nav-link smoothScroll">Home</a>
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

            <h1 class="yogaas">Pilates</h1>

            <div class="yogacards-container">
                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/1.jpg" alt="">
                    <div class="infocard">
                        <h3>Mat Pilates
                        </h3>

                        <p>
                            Exercises are performed on a mat, using body weight for resistance. Common tools used
                            include small props like resistance bands, magic circles, and foam rollers
                        </p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/2.jpg" alt="">
                    <div class="infocard">
                        <h3>Reformer Pilates</h3>
                        <p>Uses the Reformer machine, which features a sliding carriage and adjustable springs for
                            resistance. The springs can be set to provide different levels of resistance to challenge
                            different muscle groups</p>

                        <button class="btn btn-warning">View Details</button>
                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/3.jpg" alt="">
                    <div class="infocard">
                        <h3>Barrel Pilates</h3>
                        <p>Utilizes a barrel-shaped piece of equipment, either a spine corrector or a ladder barrel, to
                            help improve mobility and flexibility.
                        </p>

                        <button class="btn btn-warning">View Details</button>
                    </div>
                </div>



                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/4.jpg" alt="">
                    <div class="infocard">
                        <h3>Wunda Chair Pilates</h3>
                        <p>A compact piece of equipment that looks like a small chair with springs. It allows for
                            various exercises that target the core, legs, and arms.</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/5.jpg" alt="">
                    <div class="infocard">
                        <h3>Pilates for Athletes</h3>
                        <p>Tailored to athletes, focusing on building core strength, stability, and flexibility, while
                            also enhancing performance and preventing injuries</p>
                        <button class="btn btn-warning">View Details</button>

                    </div>
                </div>

                <div class="yogacards">
                    <img src="othercss/imagesss/pilates/6.jpg" alt="">
                    <div class="infocard">
                        <h3>Pilates for Rehabilitation</h3>
                        <p>A modified Pilates approach designed for individuals recovering from injury or surgery.
                            Focuses on improving movement patterns, mobility, and rebuilding strength.</p>
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